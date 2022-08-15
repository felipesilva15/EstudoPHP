<?php

// Função para incluir classe, verificando se o arquivo existe
function incluirClasses($nomeClasse){
    if (file_exists("$nomeClasse.php")){
        require_once("$nomeClasse.php");
    }
} 

// Realiza o autoload da classe
spl_autoload_register("incluirClasses");

// Realiza o autoload da classe em um outro diretório
spl_autoload_register(function ($nomeClasse){
    if (file_exists("classesAbstratas".DIRECTORY_SEPARATOR."$nomeClasse.php")){
        require_once("classesAbstratas".DIRECTORY_SEPARATOR."$nomeClasse.php");
    }
});

$carro = new Fusca();

$carro->acelerar(80);

?>