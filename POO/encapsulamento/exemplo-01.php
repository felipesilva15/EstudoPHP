<?php

class Pessoa{
    public $nome = "Felipe Silva";  // É possível ser acessado por todos
    protected $idade = 18;          // É possível ser acessado somente dentro desta classe ou quando o mesmo é herdado
    private $senha = "admin";       // É possível ser acessado somente dentro desta classe, não é possível nem mesmo quando é herdado

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
        
        echo "<br>";
    }
}

$pessoa = new Pessoa();

$pessoa->verDados();

echo $pessoa->nome."<br>";
//echo $pessoa->idade."<br>";
//echo $pessoa->senha."<br>";

?>