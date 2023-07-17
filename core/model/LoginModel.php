<?php

use Database;

class LoginModel {

    public function findUser($email, $senha) {
        $db = new Database();
        return $db->query("SELECT * FROM usuario WHERE email = ? AND senha = ?", [$email, $senha]);
    }
}