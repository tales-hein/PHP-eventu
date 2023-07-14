<?php

require 'functions.php';
require 'library/Database.php';
require 'library/Router.php';

//$dbConfigs = require('config.php'); 
//$db = new Database($dbConfigs['dsn'], $dbConfigs['user'], $dbConfigs['senhadb']);

$url = $_SERVER['REQUEST_URI'];
$router = new Router();
$router->goTo($url);