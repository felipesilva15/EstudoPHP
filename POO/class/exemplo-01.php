<?php

// Classes sempre se iniciam com letra maiúscula
class Pessoa {
    // Este é um atributo
    public $nome;

    // Este é um método
    public function falar(){
        // o $this serve para referênciar atributos e métodos dentro de outros métodos
        return "Meu nome é ".$this->nome;
    }
}

// Instancia a classe
$felipe = new Pessoa();

// Define o valor do atributo nome
$felipe->nome = "Felipe";

// Utiliza o método falar
echo $felipe->falar();

?>