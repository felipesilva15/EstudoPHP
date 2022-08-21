<?php

// Seta a localidade
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Realiza o carregamento das classes do projeto
spl_autoload_register(function($nameClass){
    $dirClass = "class";
    $filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";

    if (file_exists($filename)){
        require_once($filename);
    }
});