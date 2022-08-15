<?php

// Criação de contantes

// Única
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
echo "<br>";

// Constante de array
define("BD", [
    "server"=>"127.0.0.1",
    "user"=>"Felipe",
    "password"=>"123",
    "name"=>"Felipe"    
]);

print_r(BD);
echo "<br>";

// Constantes da linguagem

// Versão do PHP
echo PHP_VERSION;
echo "<br>";

// Separador de diretório
echo DIRECTORY_SEPARATOR;
echo "<br>";

?>