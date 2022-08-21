<?php

// Cria um arquivo de texto
$file = fopen("teste.txt", "w+");
fclose($file);

echo "Arquivo criado<br>";

// Apaga o arquivo gerado
unlink("teste.txt");

echo "Arquivo excluido";