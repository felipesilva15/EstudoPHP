<?php
// Realiza a conexão com o BD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");

// Prepara a query para deletar o registro
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE pkId = :ID");

// Define as variáveis com os dados
$id = 7;

// Define os dados no comando
$stmt->bindParam(":ID", $id);

$stmt->execute();

// Insere os dados nos BD
echo "Registo de ID $id deletado com sucesso!";