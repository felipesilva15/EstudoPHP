<?php

require_once("config.php");

$usuario = new Usuario();

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
// $usuario->login("felipe.silva", "123");

// echo $usuario;



// Insere um usuário no BD
// $usuario = new Usuario("felipe.santos", "123@456");

// $usuario->insert();
// echo $usuario;



// Altera um usuário no BD
// $usuario->loadById(10);
// $usuario->update("aluno", "default");

// echo $usuario;



// Deleta um usuário no BD
$usuario->loadById(9);
$usuario->delete();

echo $usuario;
