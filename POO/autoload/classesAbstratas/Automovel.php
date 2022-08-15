<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

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

?>