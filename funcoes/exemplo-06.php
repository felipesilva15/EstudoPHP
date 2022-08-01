<?php

// Função com a execução de um callback(Função anônima)
function processo($callback){
    // Execução do processo

    $callback();
}

// Função anônima para callback
$callback = function(){
    echo "Terminou!";
};

processo($callback);

?>