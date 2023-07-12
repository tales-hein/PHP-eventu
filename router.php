<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controller/LoginController.php',
];

function routeParaController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }else {
        abort();
    }
}

function abort($codigo = 404) {
    require "view/erro/{$codigo}.php";
    die();
}

routeParaController($uri, $routes);