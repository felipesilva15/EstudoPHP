<?php

// Cria uma exceção e a trata no catch
try {
    throw new Exception("Ocorreu um erro", 400);
} catch (Exception $e) {
    echo json_encode(array(
        "code"=>$e->getCode(),
        "message"=>$e->getMessage(),
        "file"=>$e->getFile(),
        "line"=>$e->getLine()
    ));
}