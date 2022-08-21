<?php

$dir = "assets";

// Verifica se o diretório existe
if(!is_dir($dir)){
    // Cria um diretório
    mkdir($dir);

    echo "Diretório $dir criado com sucesso!";
}else{
    // Apaga o diretório
    rmdir($dir);

    echo "O diretório $dir já existe! O mesmo foi removido.";
}