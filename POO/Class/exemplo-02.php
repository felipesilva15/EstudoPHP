<?php

class Carro{
    // Cria os atributos da classe, no qual são privados(Só são acessados dentro da classe)
    private $modelo, $motor, $ano;

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo():string{
        return $this->modelo;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getMotor():string{
        return $this->motor;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function getAno():int{
        return $this->ano;
    }

    // Método que retorna um array do carro
    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno(),
            "carro"=>$this->getModelo().", motor ".$this->getMotor().", ano ".$this->getAno()
        );
    }
}

// Instancia a classe Carro no objeto carro
$carro = new Carro();

// Define os valores dos atributos
$carro->setModelo("Ford Mustang");
$carro->setMotor("5.0 V8");
$carro->setAno("2022");

// Exibe o Array do carro na tela
var_dump($carro->exibir());

?>