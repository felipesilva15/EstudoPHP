<?php

require_once("config.php");

$sql = new Sql;

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

if (!isset($usuarios) || gettype($usuarios) != "array"){
    $usuarios = array();
}

echo json_encode($usuarios);