<?php

function pegarArgumentos(){
    $args = func_get_args();

    return $args;
}

print_r(pegarArgumentos("Olá", "Felipe", 18))

?>