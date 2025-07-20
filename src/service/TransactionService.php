<?php

namespace App\Service;
use App\Repository\ListTransactionRepository;

class TransactionService{

    private static ?TransactionService $listeTransactions = null;
    private TransactionRepository $TransactionRepository;

    public static  function getInstance()
    {
        if (is_null(self::$listeTransactions)) {
        self::$listeTransactions = new TransactionService();

         }
          return self::$listeTransactions;
   }
   public function __construct()

   {
    $this->TransactionRepository::getInstance();
   }
   public function listTransactions ($compte_id)
   {
    return $this->TransactionRepository->listTransactions($compte_id);

   }
    
}   