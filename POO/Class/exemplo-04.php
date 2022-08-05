<?php

// Métodos mágicos
class Endereco{
    private $logradouro, $numero, $cidade, $bairro;

    // Método construtor, chamado toda vez que a classe é instanciada
    public function __construct($a, $b, $c, $d)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        $this->bairro = $d;
    }

    // Método destruct, chamado toda vez que o objeto da classe é retirado da memória
    public function __destruct()
    {
        echo "<br><b>Destruindo a classe<b><br>";
    }

    // Método toString, chamado toda vez que é utilizado um echo para exibir o objeto na tela
    public function __toString()
    {
        return $this->logradouro.", ".$this->numero." - ".$this->bairro.", ".$this->cidade;
    }
}

$pesquisaEndereco = new Endereco("Rua Carambola Natal", 140, "São Paulo", "Vila Natal");

echo $pesquisaEndereco;

unset($pesquisaEndereco);

?>