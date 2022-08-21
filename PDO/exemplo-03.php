<?php
// Realiza a conexão com o BD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");

// Prepara a query para inserir o dado
$stmt = $conn->prepare("INSERT INTO tb_usuarios (dsLogin, dsSenha) VALUES (:LOGIN, :SENHA)");

// Define as variáveis com os dados
$login = "felipe";
$senha = "test123";

// Define os dados no comando
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();

// Insere os dados nos BD
echo "Dados inseridos com sucesso!";