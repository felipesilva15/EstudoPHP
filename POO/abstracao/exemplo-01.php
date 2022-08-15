<?php

// A interface faz com que as classes que utilizam essa interface obrigatóriamente tenham os atributos e métodos da mesma
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

// Cria uma classe abstrata na qual utiliza a interface criada acima. Uma classe abstrata não pode ser instânciada, a não ser que seja utilizada por uma filha
abstract class Automovel implements Veiculo{
    public function acelerar($velocidade)
    {
        echo "O veículo acelorou até ". $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veículo frenou até ". $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo trocou para a ". $marcha ."ª marcha";
    }
}

// Esta classe é uma filha da classe Automovel, e a mesma pode utilizar os recursos da mesma
class Fusca extends Automovel{
    public function empurrar($metros){
        echo "O Fusca foi empurrado por ". $metros ."m";
    }
}

$carro = new Fusca();

$carro->acelerar(140);

?>