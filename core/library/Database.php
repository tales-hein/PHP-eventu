<?php

class Database {
    
    public $conexao;

    public function __construct() {
        $config = require('config.php');

        $data_source_name = "mysql:" . http_build_query($config['dsn'], '', ';');

        $this->conexao = new PDO($data_source_name, $config['user'], $config['senhadb'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = []) {
        $stm = $this->conexao->prepare($query);
        $stm->execute($params);
        return $stm;
    }

}