<?php

// function trocaValor($valor){
//     $valor += 100;

//     return $valor;
// }

// $valor = 10;

// echo trocaValor($valor)."<br>";
// echo $valor;

// Passa a variável como referência no parâmetro
function trocaValor(&$valor){
    $valor += 100;

    return $valor;
}

$valor = 10;

echo trocaValor($valor);
echo "<br>";
echo $valor;
echo "<br>";
echo trocaValor($valor);
echo "<br>";
echo $valor;


?>