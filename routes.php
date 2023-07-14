<?php

function findRoutes() {
    $routes = [];

    $controllers = scandir('controller');
    
    foreach ($controllers as $controller) {
        $controllerRef = strtolower(str_replace('Controller.php', '', $controller));
        $key = '/' . $controllerRef;
        if($controllerRef == 'login') {
            $routes['/'] = 'controller/LoginController.php';    
        }else {
            $routes[$key] = 'controller/' . $controller;
        } 
    }
    
    return $routes;
}

return findRoutes();