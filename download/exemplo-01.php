<?php

// Define a URL do arquivo que será baixado
$fileLink = "https://www.gstatic.com/youtube/img/promos/growth/9ed4da82df05e8d7cc3dc14d4848a5a07d0b109d0bab9d83db02c19e5d436070_122x56.webp";

// Pega o conteúdo do arquivo
$content = file_get_contents($fileLink);

// Pega as informações do arquivo
$parse = parse_url($fileLink);

// Pega o nome do arquivo
$basename = basename($parse["path"]);

// Cria um arquivo com o nome original
$file = fopen($basename, "w+");

// Escreve o conteúdo baixado no arquivo criado
fwrite($file, $content);

fclose($file);

// Exibe o arquivo baixado na tela
echo "<img src=\"$basename\" >";

?>
