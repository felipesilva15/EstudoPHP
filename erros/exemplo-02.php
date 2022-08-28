<?php

// Não exibe Warnings e Notices para o cliente 
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_WARNING);

$nome = $_GET["nome"];

echo $nome;