<?php

require_once("config.php");

$sql = new Sql();

// Busca os dados de usuários no BD
$data = $sql->select("SELECT * FROM tb_usuarios");
$headers = array();

// Monta um array dos cabeçalhos da tabela
foreach ($data[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$filename = "usuarios.csv";

// Cria o arquivo CSV
$file = fopen($filename, "w+");

// Insere a linha de cabeçalho separados por vírgula
fwrite($file, implode(",", $headers)."\r\n");

// Insere os dados de usuários no arquivo, separados por vírgula
foreach ($data as $usuario) {
    fwrite($file, implode(",", $usuario)."\r\n");
}

fclose($file);

echo "Arquivo modificado";