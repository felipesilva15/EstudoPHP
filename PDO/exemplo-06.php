<?php
// Realiza a conexão com o BD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");

// Inicia transação 
$conn->beginTransaction();

// Prepara a query para deletar o registro
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE pkId = ?");

// Define as variáveis com os dados
$id = 2;

// Executa o comando trocando os valores
$stmt->execute(array($id));

if($id != 2){
    // Volta a transação
    $conn->rollBack();

    // Não deleta o registro do BD
    echo "Registo de ID $id não foi deletado!";
}
else{
    // Conclui a transação
    $conn->commit();

    // Deleta o registro do BD
    echo "Registo de ID $id deletado com sucesso!";
}

