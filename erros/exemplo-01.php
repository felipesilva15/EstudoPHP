<?php

// Função a ser executada em caso de erros
function errorHandler($code, $message, $file, $line){
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "file"=>$file,
        "line"=>$line
    ));
}

// Define a função que vai ser executada
set_error_handler("errorHandler");

// Força o erro
trigger_error("Erro de usuário", E_USER_ERROR);
