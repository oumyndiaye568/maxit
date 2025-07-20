<?php

require_once __DIR__ . '/../vendor/autoload.php';

function prompt(string $message): string {
    echo $message;
    return trim(fgets(STDIN));
}

function writeEnvIfNotExists(array $config): void {
    $envPath = __DIR__ . '/../.env';
    if (!file_exists($envPath)) {
        $env = <<<ENV
APP_URL=http://localhost:8000
DB_HOST={$config['host']}
DB_NAME={$config['dbname']}
DB_PASS={$config['pass']}
DB_USER={$config['user']}
DB_PORT={$config['port']}
DB_DRIVER={$config['driver']}

dns = "{$config['driver']}:host={$config['host']}; dbname={$config['dbname']};port={$config['port']}"

ENV;
        file_put_contents($envPath, $env);
        echo ".env généré avec succès à la racine du projet.\n";
    } else {
        echo "Le fichier .env existe déjà, aucune modification.\n";
    }
}

$driver = strtolower(prompt("Quel SGBD utiliser ? (mysql / pgsql) : "));
$host = prompt("Hôte (default: 127.0.0.1) : ") ?: "127.0.0.1";
$port = prompt("Port (default: 3306 ou 5432) : ") ?: ($driver === 'pgsql' ? "5432" : "3306");
$user = prompt("Utilisateur (default: root) : ") ?: "root";
$pass = prompt("Mot de passe : ");
$dbName = prompt("Nom de la base à créer : ");

try {
    $dsn = "$driver:host=$host;port=$port";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($driver === 'mysql') {
        $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        echo "Base MySQL `$dbName` créée avec succès.\n";
        $pdo->exec("USE `$dbName`");
    } elseif ($driver === 'pgsql') {
        $check = $pdo->query("SELECT 1 FROM pg_database WHERE datname = '$dbName'")->fetch();
        if (!$check) {
            $pdo->exec("CREATE DATABASE \"$dbName\"");
            echo "Base PostgreSQL `$dbName` créée.\nRelancez la migration pour créer les tables.\n";
               writeEnvIfNotExists([
                'driver' => $driver,
                'host' => $host,
                'port' => $port,
                'user' => $user,
                'pass' => $pass,
                'dbname' => $dbName
            ]);
            exit;
        } else {
            echo "ℹ Base PostgreSQL `$dbName` déjà existante.\n";
        }
    }

    $dsn = "$driver:host=$host;port=$port;dbname=$dbName";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($driver === 'mysql') {
        $tables = [

        "CREATE TABLE IF NOT EXISTS profil (
            id INT AUTO_INCREMENT PRIMARY KEY,
            role VARCHAR(20) NOT NULL,
            CHECK (role IN ('Client', 'Service Commercial'))
        );
",


    "CREATE TABLE IF NOT EXISTS utilisateur ( 
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100) NOT NULL,
        numero_cni VARCHAR(20) UNIQUE NOT NULL,
        photo_recto_cni VARCHAR(255) NOT NULL,
        photo_verso_cni VARCHAR(255) NOT NULL,
        profil_id INT NOT NULL,
        password VARCHAR(255) NOT NULL,
        FOREIGN KEY (profil_id) REFERENCES profil(id)

            );",

  "CREATE TABLE IF NOT EXISTS compte (
        id INT AUTO_INCREMENT PRIMARY KEY,
        telephone VARCHAR(20) UNIQUE NOT NULL,
        solde DECIMAL(12,2) NOT NULL DEFAULT 0.00,
        type VARCHAR(20) NOT NULL,
        client_id INT NOT NULL,
        FOREIGN KEY (client_id) REFERENCES utilisateur(id),
        CHECK (type IN ('Principal', 'Secondaire'))


            );",


        "CREATE TABLE IF NOT EXISTS transaction (
        id INT AUTO_INCREMENT PRIMARY KEY,
        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        type VARCHAR(20) NOT NULL,
        montant DECIMAL(12,2) NOT NULL,
        compte_id INT NOT NULL,
        FOREIGN KEY (compte_id) REFERENCES compte(id),
        CHECK (type IN ('Retrait', 'Depot', 'Paiement'))
            );",

        ];
    } else {
        

        $tables = [

             "CREATE TABLE IF NOT EXISTS profil (
              id SERIAL PRIMARY KEY,
             role VARCHAR(20) NOT NULL CHECK (role IN ('Client', 'Service Commercial'))

            );",

            "CREATE TABLE IF NOT EXISTS utilisateur (
                 id SERIAL PRIMARY KEY,
                nom VARCHAR(100) NOT NULL,
                numero_cni VARCHAR(20) UNIQUE NOT NULL,
                photo_recto_cni VARCHAR(255) NOT NULL,
                photo_verso_cni VARCHAR(255) NOT NULL,
                profil_id INTEGER REFERENCES profil(id),
                password VARCHAR(255) NOT NULL

            );",
            "CREATE TABLE IF NOT EXISTS compte (
            id SERIAL PRIMARY KEY,
            telephone VARCHAR(20) UNIQUE NOT NULL,
            solde DECIMAL(12,2) DEFAULT 0.00 NOT NULL,
            type VARCHAR(20) NOT NULL CHECK (type IN ('Principal', 'Secondaire')),
            client_id INTEGER NOT NULL REFERENCES utilisateur(id)

            );",
         
            "CREATE TABLE IF NOT EXISTS transaction (
            id SERIAL PRIMARY KEY,
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            type VARCHAR(20) NOT NULL CHECK (type IN ('Retrait', 'Depot', 'Paiement')),
            montant DECIMAL(12,2) NOT NULL,
            compte_id INTEGER NOT NULL REFERENCES compte(id)
            );" 

           

        ];
    }

        foreach ($tables as $sql) {
            $pdo->exec($sql);
        }

        echo "Toutes les tables ont été créées avec succès dans `$dbName`.\n";
        writeEnvIfNotExists([
        'driver' => $driver,
        'host' => $host,
        'port' => $port,
        'user' => $user,
        'pass' => $pass,
        'dbname' => $dbName
    ]);


} catch (Exception $e) {

    echo "Erreur : " . $e->getMessage() . "\n";
}




