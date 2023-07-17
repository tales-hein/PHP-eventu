<?php
session_start();

require 'functions.php';
require 'core/library/Database.php';
require 'core/library/Router.php';

$url = $_SERVER['REQUEST_URI'];
$router = new Router();
$router->goTo($url);