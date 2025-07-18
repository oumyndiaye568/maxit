<?php

namespace App\Entity;

use App\Core\Abstract\AbstractEntity;

class TransactionEntity  {

    private int $id ;
    private float $montant;
    private string $date;
    private string $type;

    public function __construct(  
            int $id=0,
            float $montannt="",
            string $date= "",
            // string $type= ""
            )
        {
            $this->id = $id;
            $this->montant = $montannt;
            $this->date = $date;
            // $this->type = $type;
        }

    public function __getId ()

        {
            return $this->id;
        } 

    public function getMontant()

        {
            return $this->montant;
        }

    public function getDate ()
        {
            return $this->date;
        }

     public function getType ()

        {
            return $this->type;
        }
     
    public function setId(int $id)   
        {
            $this->id = $id;
        }

    public function setMontant (float $montannt)    

        {
            $this->montant = $montannt;
        }
    public function setDate (string $date)    
        {
            $this->date=$date;
        }

}    