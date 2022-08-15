<?php

// Realiza a conexão com o BD
$conn = new mysqli("localhost", "sa", "spy", "dbphp7");

// Caso ocorra um erro, exibe-o na tela
if ($conn->connect_error){
    echo "Error ".$conn->connect_errno.": ".$conn->connect_error;
}

// Prepara o comando a ser executado, as interrogações serão trocadas pelos valores
$stmt = $conn->prepare("INSERT INTO TB_USUARIOS (dsLogin, dsSenha) VALUES (?, ?);");

// Define o tipo dos valores e as variáveis
$stmt->bind_param("ss", $login, $senha);

// Define os dados
$login = "admin";
$senha = "admin";

// Executa o comando no BD
$stmt->execute();

// Define os dados
$login = "root";
$senha = "@!&*";

// Executa o comando no BD
$stmt->execute();




?>