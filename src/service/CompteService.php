<?php

namespace App\Service;
use App\Repository\CompteRepository;


class CompteService
 {

    private static  ?CompteService $service =null;
    private compteRepository $CompteRepository;

    public  static function getInstance()
    {
        if(is_null(self:: $service))
         {
            self::$service=new CompteService();
            
        }

        return self::$service;
    }

    private function __construct ()
    {
        $this->CompteRepository = CompteRepository::getIsntance();
    }

    public function getSolde (int $idclient) 
    {
        return $this->CompteRepository->getSolde($idclient);
    }

    
}
