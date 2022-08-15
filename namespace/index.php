<?php

// Realiza o carregamento da funçãod e autoload
require_once("config.php");

// Utiliza a classe de cadastro do namespace de Cliente, no qual é uma herança da classe de cadastro da raiz
use Cliente\Cadastro;

$cadastro = new Cadastro();

// Seta as informações do cadastro
$cadastro->setNome("Felipe da Silva Santos");
$cadastro->setEmail("felipe.allware@gmail.com");
$cadastro->setSenha("1234");

// Registra uma venda da classe de Cadastro do namespace de Cliente
$cadastro->registrarVenda();

echo "<br>";

echo $cadastro;

?>