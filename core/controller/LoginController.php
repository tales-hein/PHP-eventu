<?php

use LoginModel;
use Authentication;

class LoginController {
    
    public function index() {
        require 'core/view/script/login/login.php';
    }
    
    public function authenticateLogin() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $loginModel = new LoginModel();
            $login = $loginModel->findUser($email, $senha);
            if(!empty($login)) {
                //Gerar autenticação
            }else {
                require 'view/login/login.php';
            }
        }
    }
    
}