<?php

class Database {
    
    public $conexao;

    public function __construct() {
        $dsn = "mysql:host=localhost;port=3306;dbname=eventudb;user=root;charset=utf8mb4";
        $this->conexao = new PDO($dsn);
    }

    public function query($query) {
        $stm = $this->conexao->prepare($query);
        $stm->execute();
        return $stm;
    }

}