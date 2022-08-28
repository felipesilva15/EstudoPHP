<?php

// Função para exibir o erro
function trataNome($nome){
    if(!$nome){
        throw new Exception("Nenhum nome foi informado!", 401);
    }

    echo $nome."<br>";
}

// chama umca função, trata no catch e executa um código final
try {
    trataNome("Felipe");
    trataNome("");
} catch (Exception $e) {
    echo json_encode(array(
        "code"=>$e->getCode(),
        "message"=>"Error: ".$e->getMessage(),
        "file"=>$e->getFile(),
        "line"=>$e->getLine()
    ));
} finally{
    echo "<br>Processo finalizado!<br>";
}