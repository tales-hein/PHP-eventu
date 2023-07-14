<?php

class Router {

    private $parsedRoute = [];
    private $routes = [];

    public function goTo($url) {
        parse_str(parse_url($url, PHP_URL_QUERY), $queryArray);
        $pathArray = explode('/', parse_url($url, PHP_URL_PATH));
        $this->parsedRoute = [
            'path' => $pathArray,
            'query' => $queryArray,
        ];
        $this->routes = require('routes.php');
        $this->findController();
    }
    
    private function findController() {
        if(array_key_exists('/' . $this->parsedRoute['path'][1], $this->routes)) {
            $this->routeTo($this->routes['/' . $this->parsedRoute['path'][1]]);
        }else {
            $this->abort();
        }
    }

    private function routeTo($controllerPath) {
        $controller = str_replace('.php', '', explode('/', $controllerPath)[1]);
        $action = $this->parsedRoute['path'][2];
        require $controllerPath;
        $controllerInstance = new $controller;
        if($action == null) {
            $controllerInstance->index();
            return;
        }
        if(method_exists($controllerInstance, $action) == false && $action !== null) {
            $this->abort();
        } 
        if(empty($this->parsedRoute['query']) && method_exists($controllerInstance, $action) == true) {
            $controllerInstance->$action();
            return;
        }
        parse_str($this->parsedRoute['query'], $actionParams);
        $controllerInstance->$action($actionParams[0]);
    }
    
    private function abort($codigo = 404) {
        require "view/erro/{$codigo}.php";
        die();
    }
}