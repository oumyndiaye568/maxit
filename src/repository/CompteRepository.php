<?php

namespace App\Repository;
use PDO;
use App\Core\abstract\AbstractRepository;

class CompteRepository  extends AbstractRepository{

private static ?CompteRepository $repositorie=null;


private function __contruct ()
{
    parent::__construct();

}

public static function getIsntance()
{
    if (is_null(self::$repositorie)) {
        self::$repositorie= new CompteRepository();
        return self::$repositorie;
}

}
public function getSolde( int $idclient)
 {
  
    // $requet = "
    // select *
    //  from compte
    //  where user_id=:userid
    // ";
    // $smt=$this->pdo->prepare($requet);
    //   $smt->execute(['idclient'=>$idclient]);

    //     $array = $smt->fetchAll(\PDO::FETCH_ASSOC);
    //     $solde=$array['solde'];
    //     return $solde;


          $requet = "
     select solde
     from compte
     where user_id=:userid
    ";
      $smt=$this->pdo->prepare($requet);
      $smt->execute([':userid'=>$idclient]);
      $solde=$smt->fetch(PDO::FETCH_ASSOC);
      return $solde;     
 }




}