<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

try {
    $dsn = $_ENV['DSN'] ?? "{$_ENV['DB_DRIVER']}:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};dbname={$_ENV['DB_NAME']}";
    $pdo = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Connexion réussie à la base de données\n";
} catch (PDOException $e) {
    die(" Connexion échouée : " . $e->getMessage());
}

try {
    $pdo->beginTransaction();

    // 1. Insertion des profils
    $pdo->exec("INSERT INTO profil (role) VALUES ('Client'), ('Service Commercial')");
    $profilClientId = $pdo->lastInsertId();
    $profilSCId = $pdo->lastInsertId();
    echo "Profils insérés\n";

    // 2. Insertion des utilisateurs (clients)
    $clients = [
        ['Fallou Ndiaye', 'CNI001', 'recto1.png', 'verso1.png', 'password'],
        ['khadija  Fall', 'CNI002', 'recto2.png', 'verso2.png', 'password'],
        ['Anna SOCK', 'CNI003', 'recto3.png', 'verso3.png', 'password'],
        ['Oumy Ndiaye', 'CNI004', 'recto4.png', 'verso4.png', 'password'],
    ];

    $stmtUser = $pdo->prepare("INSERT INTO utilisateur (nom, numero_cni, photo_recto_cni, photo_verso_cni, profil_id, password) VALUES (?, ?, ?, ?, ?, ?)");
    $userIds = [];

    foreach ($clients as [$nom, $cni, $recto, $verso, $pass]) {
        $stmtUser->execute([$nom, $cni, $recto, $verso, $profilClientId,$pass]);
        $userIds[] = $pdo->lastInsertId();
    }
    echo " Clients insérés\n";

    // 3. Insertion des comptes
    $telephones = ['770000001', '770000002', '770000003', '770000004', '770000005', '770000006'];
    $soldes = [150000, 120000, 20000, 80000, 30000, 100000];

    $stmtCompte = $pdo->prepare("INSERT INTO compte (telephone, solde, type, client_id) VALUES (?, ?, ?, ?)");
    $compteIds = [];

    foreach ($userIds as $index => $userId) {
        $stmtCompte->execute([$telephones[$index], $soldes[$index], 'Principal', $userId]);
        $compteIds[] = $pdo->lastInsertId();
    }
    echo " Comptes insérés\n";

    // 4. Insertion d’un utilisateur service commercial
    $stmtSC = $pdo->prepare("INSERT INTO utilisateur (nom, numero_cni, photo_recto_cni, photo_verso_cni, profil_id, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmtSC->execute(['Admin MAXITSA', 'ADMIN000', 'admin_recto.png', 'admin_verso.png', $profilSCId, 'passer123']);
    echo " Utilisateur Service Commercial inséré\n";

    // 5. Insertion de transactions
    $transactions = [
        ['2025-07-18 12:00:00', 'Retrait', 10000, 1],
        ['2025-07-18 14:00:00', 'Depot', 20000, 2],
        ['2025-07-18 15:00:00', 'Paiement', 15000, 3],
        ['2025-07-18 16:00:00', 'Retrait', 10000, 4],
        ['2025-07-18 17:00:00', 'Depot', 5000, 5],
    ];

    $stmtTrx = $pdo->prepare("INSERT INTO transaction (date, type, montant, compte_id) VALUES (?, ?, ?, ?)");
    foreach ($transactions as [$date, $type, $montant, $compteId]) {
        $stmtTrx->execute([$date, $type, $montant, $compteId]);
    }

    echo " Transactions insérées\n";

    $pdo->commit();
    echo "Toutes les données ont été insérées avec succès .\n";

} catch (PDOException $e) {
    $pdo->rollBack();
    die(" Erreur lors de l'insertion des données : " . $e->getMessage());
}