<?php

require_once("config.php");

$sql = new Sql();

$data = $sql->select("SELECT * FROM tb_usuarios");
$headers = array();

foreach ($data[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$filename = "usuarios.csv";

$file = fopen($filename, "w+");

fwrite($file, implode(",", $headers)."\r\n");

foreach ($data as $usuario) {
    fwrite($file, implode(",", $usuario)."\r\n");
}

fclose($file);

echo "Arquivo modificado";