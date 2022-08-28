<?php

// Recupara o cookie
if(isset($_COOKIE["NOME_COOKIE"])){
    $obj = json_decode($_COOKIE["NOME_COOKIE"]);
    $array = json_decode($_COOKIE["NOME_COOKIE"], true);

    echo $obj->id." - ".$obj->usuario;
    echo "<br><br>";
    print_r($array);
}