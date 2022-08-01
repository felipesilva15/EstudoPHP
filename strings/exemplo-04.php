<?php
    $texto = "Felipe da Silva Santos";

    // Posição de uma string em outra string
    $posicao = strpos($texto, "Silva");

    $recorte = substr($texto,$posicao);

    var_dump($posicao);

    echo $recorte;
?>