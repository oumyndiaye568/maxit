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

        '/create' => [
         'controller' => UserController::class,
        'action' => 'create'
     ],
    
];


