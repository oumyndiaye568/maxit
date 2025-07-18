<?php

namespace App\Core\Middlewares;
use App\core\session;
class Auth 
{
    public function __invoke()
    {
        try 
        {
            $session=Session::getInstance();
            $user=$session->get('user');

            if(!$user)
            {
                header("Location: /");
                exit();
            }
                return true; 
            } 
                catch (\Throwable $th) 
            {      
        }
    }

}