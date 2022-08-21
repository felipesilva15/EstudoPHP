<?php

require_once("config.php");

$usuario = new Usuario;

$usuario->loadById(4);

echo $usuario;