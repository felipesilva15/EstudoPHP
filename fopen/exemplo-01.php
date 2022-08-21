<?php

$filename = "log.txt";
$criar = false;

if (!is_file($filename)){
    $criar = true;
}

$file = fopen($filename, ($criar) ? "w+" : "a" );

$date =  new DateTime();
fwrite($file, $date->format("Y-m-d H:i:s")."\r\n");

fclose($file);

echo "Arquivo modificado";