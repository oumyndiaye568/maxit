<?php

use App\Controller\SecurityController;
use App\Controller\UserController;

$routes = [
    '/' => [
        'controller' => SecurityController::class,
        'action' => 'login',
        'middlewares'=>['auth',"isclient"]

    ],
    
    '/dashboardClient' => [
        'controller' => UserController::class,
        'action' => 'showDashboard'
    ],
    '/logout' => [
        'controller' => SecurityController::class,
        'action' => 'logout',
        'middlewares'=>['auth']
    ],

        '/voircompte' => [
         'controller' => UserController::class,
        'action' => 'voircompte'
     ],


         '/register' => [
         'controller' => SecurityController::class,
        'action' => 'register'
     ],
    

             '/ajouter-compte' => [
         'controller' => UserController::class,
        'action' => 'ajoutercompte'
     ],
];


