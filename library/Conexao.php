<?php

$ususario = 'root';
$senha = 'admintales';
$database = 'eventudb';
$host = 'localhost';

$mysqli = new mysqli($host, $ususario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar no banco de dados: " . $mysqli->error);
};