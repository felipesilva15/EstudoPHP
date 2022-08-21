<?php

$dir1 = "pasta_01";
$dir2 = "pasta_02";
$date = date("Y-m-d_His");
$filename = "texto_$date.txt";

if(!is_dir($dir1)) {
    mkdir($dir1);
}

if(!is_dir($dir2)) {
    mkdir($dir2);
}

if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){
    $file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");
    fwrite($file, $date);
    fclose($file);
}

// Renomeia e/ou muda o caminho do mesmo
rename(
    $dir1.DIRECTORY_SEPARATOR.$filename, // Origem
    $dir2.DIRECTORY_SEPARATOR.$filename // Destino
);

echo "Arquivo movido";