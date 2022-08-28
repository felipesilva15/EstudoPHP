<?php

$cep = "04863160";
$url = "viacep.com.br/ws/$cep/json/";

// Define a url para obter os dados de endereço a partir de um CEP
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Realiza a requisição e guarda o valor no response
$response = curl_exec($ch);

// Fecha o cURL
curl_close($ch);

echo $response; 

// $data = json_decode($response, true);

// var_dump($data);