<?php

require_once("vendor/autoload.php");

use Slim\Slim;

$app = new Slim();

$app->get('/', function(){
    echo "Página inicial";
});

$app->get('/hello/:nome', function($nome){
    echo "Olá $nome";
});

$app->run();