<?php

require_once("config.php");

// Exibe o ID da sessão 
echo "Último ID: &nbsp".session_id();
echo "<br>";

// Gera o ID da sessão novamente
session_regenerate_id();
echo "Novo ID: &nbsp&nbsp&nbsp".session_id();
echo "<br>";

echo "<br><br>";

echo session_save_path();
echo "<br>";

echo(session_status());
echo "<br>";

?>