<?php

// Define os dados do cookie
$data = array(
    "id"=>1,
    "usuario"=>"Felipe Silva"
);

// Parâmetros: 1º Nome do cookie, 2º Valor do cookie e 3º Data de expiração(Aqui utilizamos 1 hora)
setcookie("NOME_COOKIE", json_encode($data), time() + 3600);

echo "Cookie criado!";