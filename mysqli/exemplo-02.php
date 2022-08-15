<?php

$conn = new mysqli("localhost", "root", "Master@12345f", "dbphp7");

if ($conn->connect_error){
    echo "Error ".$conn->connect_errno.": ".$conn->connect_error;
}

// Realiza uma consulta na tela
$queryResult = $conn->query("SELECT USU.* FROM TB_USUARIOS USU ORDER BY dsLogin");

// Cria array para armazenar os dados
$data = array();

// Ao ler os dados no BD, insere-os no array
while ($row = $queryResult->fetch_assoc()){
    array_push($data, $row);
}

// Exibe o JSON dos dados na tela
echo json_encode($data);

?>