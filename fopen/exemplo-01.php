<?php

$filename = "log.txt";
$criar = false;

if (!is_file($filename)){
    $criar = true;
}

// Caso o arquivo exista, apenas altera, se não, cria um novo
$file = fopen($filename, ($criar) ? "w+" : "a" );

// Grava a data atual no arquivo de log
$date =  new DateTime();
fwrite($file, $date->format("Y-m-d H:i:s")."\r\n");

// Fecha o arquivo
fclose($file);

echo "Arquivo modificado";