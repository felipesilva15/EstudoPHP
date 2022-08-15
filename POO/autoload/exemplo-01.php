<?php

// Nessa função, o meso irá receber o nome da classe e irá importar o arquivo php, sempre que o mesmo for utilizado
// Não tem mais suporte na última versão
function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
} 

$carro = new Fusca();

$carro->empurrar(80);

?>