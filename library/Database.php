<?php

class Database {
    
    public $conexao;

    public function __construct($config, $user, $senhadb) {
        $data_source_name = "mysql:" . http_build_query($config, '', ';');

        $this->conexao = new PDO($data_source_name, $user, $senhadb, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = []) {
        $stm = $this->conexao->prepare($query);
        $stm->execute($params);
        return $stm;
    }

}