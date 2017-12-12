<?php

namespace App\Models;
use App\Banco;

class Login extends Banco {

    public static function Login() {

        if(!empty($_POST['login']) && !empty($_POST['senha'])) {
            protegeDados($_POST);

            $tabela = 'users';
            $campos = array('cd_usuario', 'cd_nivel', 'nm_usuario');
            $argumentos = array('login' => $_POST['login'], 'senha' => $_POST['senha']);

            $dados = self::select($tabela, $campos, $argumentos);

            if($dados) {

            } else {

            }
        } else {

        }
    }


}