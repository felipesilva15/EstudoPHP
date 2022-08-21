<?php

require_once("config.php");

$usuario = new Usuario;

// Carrega um usuário pelo ID
// $usuario->loadById(4);

// echo $usuario;



// Carrega uma lista de usuários
// $data = Usuario::getList();

// echo json_encode($data);



// Carrega uma lista de usuários filtrando pelo login
// $data = Usuario::searchByLogin("root");

// echo json_encode($data);


    
// Carrega um usuário utilizando um login e senha
$usuario->login("felipe.silva", "123");

echo $usuario;