<?php

// Cria o diretório caso não exista
if(!is_dir("images")){
    mkdir("images");
}

// Passa por todos os arquivos do diretório apagando item a item
foreach (scandir("images") as $item) {
    if(!in_array($item, array(".", ".."))){
        unlink("images".DIRECTORY_SEPARATOR.$item);
    }
}

echo "Arquivos deletados";