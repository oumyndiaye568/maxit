<?php

namespace App\Core;

class Router {
    public static function resolve(array $routes){
          $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
          if (array_key_exists($uri, $routes)) {
            $route = $routes[$uri];

            if(isset($route['middelwares']) && is_array($route['middelwares']))
            {
                self::runMiddelewares($route['middelwares']);
            }

            $controllerName = $route['controller'];
            $actionName = $route['action'];

            if (class_exists($controllerName) && method_exists($controllerName, $actionName)) {
                $controller = new $controllerName();
                return $controller->$actionName();
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }

    public static function runMiddelewares( array $middelewares)
    {
        $array= require __DIR__ ."/../config/middlewares.php";
        foreach ($middelewares as $middeleware) 
        {
            if (isset($array[$middeleware])) 
            {
                $middelewareclass= $array[$middeleware];
                $controller = new $middelewareclass();
                $controller();
            }
        }
    }
}    