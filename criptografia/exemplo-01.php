<?php

$data = [
    "nome"=>"Felipe Silva"
];

define('SECRET', pack('a16', 'senha'));
define('SECRET_IV', pack('a16', 'senha'));

$openssl = openssl_encrypt(json_encode($data), 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump($openssl);

$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($string, true));