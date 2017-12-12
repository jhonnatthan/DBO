<?php

namespace App\Controllers;
use App\Models\Login;

class LoginController {

    public function index() {

        \App\View::make('login/formlogin', array(
            "title" => "Login",
            "script" => "login.js"
        ));
    }

    public function logar() {

        $usuario = Login::Login();

        if($usuario['logado']) {

        }
    }

    public function solicitarAcesso() {
        responseHtml();
        \App\View::modal('login/modalacesso');
    }

}