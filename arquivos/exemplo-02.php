<?php

$directory = "assets";

// Pega os arquivos do diretório os transformando em um array 
$images = scandir($directory);
$data = array();

foreach ($images as $img) {
    // Passa pelos arquivos do diretório e os adiciona em um array, extraindo mais informações
    if(!in_array($img, array(".", ".."))){
        $filename = $directory.DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);
        $info["size"] = filesize($filename)."B";
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = str_replace(" ", "%20", str_replace("\\", "/", "http://localhost/EstudoPHP/arquivos/$filename"));

        array_push($data, $info);
    }
}

// Exibe um json dos dados na tela
echo json_encode($data);
