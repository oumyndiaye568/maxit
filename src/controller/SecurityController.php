<?php

namespace App\Controller;

use App\Core\Abstract\AbstractController;
use App\Service\UserService;
use App\Service\CompteService;

class SecurityController extends AbstractController 
{
    private UserService $userService;
    // private CompteService $comppteService;
    
    public function __construct()
    {
        parent::__construct();
        $this->layout = 'security.layout.php'; 
        $this->userService = UserService::getInstance();
    }
    
    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $login = ($_POST['login']);
            $password = ($_POST['password']);
         
            $user = $this->userService->getUserByLoginPassword($login, $password);
            if($user !== null)
            {
                $this->session->set('user', $user);
                header('Location: /dashboardClient');
                exit();
            }
        }
        $this->renderHTML('auth/login.html');
    }
    public function logout()
    {
        $this->session->destroy();
        header('Location: /');
        exit();

    }


   
}
