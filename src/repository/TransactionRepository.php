<?php
namespace App\Repository;
use PDO;
use App\Core\abstract\AbstractRepository;

class TransactionRepository extends AbstractRepository

{

    private static ?TransactionRepository $transaction =null;

    public function __construct()
    {
        parent::__construct();
    }

    public function listtransaction($compte_id )
    {
        $requet = "
        select  date ,type ,montant 
         from transaction 
        where compte_id
        =:compteId limit 10
        ";
              $smt=$this->pdo->prepare($requet);
              $smt->execute (['compte_id'=>$compte_id]);
              $transaction=$smt->fetch(PDO::FETCH_ASSOC);
              return $transaction;
              
    }


}