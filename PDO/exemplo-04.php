<?php
// Realiza a conexão com o BD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");

// Prepara a query para alterar o registro
$stmt = $conn->prepare("UPDATE tb_usuarios SET dsLogin = :LOGIN, dsSenha = :SENHA WHERE pkId = :ID");

// Define as variáveis com os dados
$login = "felipe";
$senha = "update12345@";
$id = 7;

// Define os dados no comando
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

// Insere os dados nos BD
echo "Dados alterados com sucesso!";