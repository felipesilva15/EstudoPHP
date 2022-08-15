<?php

// function somar(n1, n2){
//     return(xn1 + n2)
// }

// function dizer(){
//     return "Olá";
// }

// $frase = dizer();
// echo strlen($frase)

function dizer($frase = "", $periodo = ""){
    echo $frase.$periodo."!<br>";
}

dizer("Olá Felipe!", "Boa tarde");

?>