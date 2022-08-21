<?php

$dir = "assets";

if(!is_dir($dir)){
    mkdir($dir);

    echo "Diretório $dir criado com sucesso!";
}else{
    rmdir($dir);

    echo "O diretório $dir já existe! O mesmo foi removido.";
}