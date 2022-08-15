<?php

// A interface serve como um ou mais requisitos para a criação de uma classe
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Corolla implements Veiculo{
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

// Caso a classe não possua um ou mais requisitos especificados na interface, será considerado como erro
$corolla = new Corolla();

$corolla->trocarMarcha(1);

?>