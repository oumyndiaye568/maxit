<?php
namespace App\Controller;
use App\Core\Abstract\AbstractController;
use App\Service\CompteService;
use App\Service\ListeTransactionService;


class UserController extends AbstractController
{
      private CompteService $CompteService;

       public function __construct ()
       {
          parent::__construct();
           $this->CompteService=Compteservice::getInstance();
            
        }

        
        
        public function showDashboard()
        { 
             $user=$this->session->get("user");
             
             if (!$user) 
             {
                header("Location: /");
                exit;
             }
             $userid=$user->getId();
              $name=$user->getNom();
              $prenom=$user->getPreNom();
              
           
             $solde=$this->CompteService->getSolde($userid);
            
            $this->renderHTML('auth/dashboard',[
                'solde'=>$solde,
                'name'=>$name,
                'prenon'=>$prenom
            ]);
            




        }
        public function voircompte (){
         $this->renderHTML("auth/voircompte.html");

    }

    public function ajoutercompte ()
    {
        $this->renderHTML("auth/ajoutercompte.html");

    }



    }


