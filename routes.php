<?php

function findRoutes() {
    $routes = [];

    $controllers = scandir('core/controller/');
    
    foreach ($controllers as $controller) {
        $controllerRef = strtolower(str_replace('Controller.php', '', $controller));
        $key = '/' . $controllerRef;
        if($controllerRef == 'login') {
            $routes['/'] = 'core/controller/LoginController.php';    
        }else {
            $routes[$key] = 'core/controller/' . $controller;
        } 
    }
    // var_dump($routes);exit(0);
    return $routes;
}

return findRoutes();