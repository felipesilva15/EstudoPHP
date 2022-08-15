<?php

// A função recebe um array de inteiros e realiza a soma deles, forçando o retorno como string
function somaValores(int ...$valores):string{
    return array_sum($valores);
}

$valor = somaValores(1,2,3,4,5);
var_dump($valor);
echo "<br>";

$valor = somaValores(10,20,30,40,50);
var_dump($valor);
echo "<br>";

?>