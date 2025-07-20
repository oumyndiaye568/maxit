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
            string $type= ""
            )
        {
            $this->id = $id;
            $this->montant = $montannt;
            $this->date = $date;
            $this->type = $type;
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
        public function setType (string $type)
        {
            $this->type = $type;
        }

        public function setCompteid (string $compteid)
        {
            $this->compteid = $compteid;
        }


        public static  function  toObject ( array $data)
        {
            return new static(
                $data["id"]?? 0,
                $data["montant"]?? 0,
                $data ["date"] ?? 0,
                $data ["type"]?? 0,
            );
        }

        public function toArray (object $data)
        {
            return [
                "id"=> $this->getId(),
                "montant"=> $this->getMontant(),
                "date"=> $this->getDate(),
                "type"=> $this->getType(),

            ];

        }

}    