<?php

    require 'vendor/autoload.php';
    require 'init.php';

    $app = new \Slim\App([ 'settings' => [
            'displayErrorDetails' => true
        ]
    ]);

    $app->get('/', function() {
        $loginController = new App\Controllers\LoginController;
        $loginController->index();
    });

    $app->post('/', function (){
        $loginController = new App\Controllers\LoginController;
        $loginController->logar();
    });

    $app->run();

?>