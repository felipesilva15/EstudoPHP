<?php
    $idade = 19;

    $idadeCrianca = 12;
    $idadeAdulto = 18;
    $idadeVelho = 60;

    if($idade <= $idadeCrianca){
        echo "Você é uma criança";
    }
    elseif($idade <= $idadeAdulto){
        echo "É um aborrescente!!";
    }
    elseif($idade <= $idadeVelho){
        echo "É um adultin";
    }
    else{
        echo "É um véio";
    }
?>