<?php

// Cria um namespace para esta classe
namespace Cliente;

// Esta classe de Cadastro é uma herança da classe de Cadastro da raiz de classes
class Cadastro extends \Cadastro{
    public function registrarVenda(){
        echo "Venda registrada para o ".$this->getNome();
    }
}

?>