<?php

// Métodos estáticos
class Documento{
    private $numero;

    // Método para definir o CPF
    public function setNumero($numero){
        // Valida o CPF e lança um erro caso seja inválido
        if (!Documento::validarCPF($numero)){
            throw new Exception("O CPF informado é inválido", 1);
        }

        $this->numero = $numero;
    }

    // Mpetodo para retornar o CPF
    public function getNumero():string{
        return $this->numero;
    }

    // Método estático para validar o CPF
    public static function validarCPF($cpf):bool{
        // Valida se o CPF foi informado
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }

                $d = ((10 * $d) % 11) % 10;

                if ($cpf[$c] != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }
}

// Instancia a classe Documento no objeto CPF
$cpf = new Documento();

$meuCpf = "66974259034";

// Define o CPF
$cpf->setNumero($meuCpf);

// Exibe na tela o CPF
var_dump($cpf->getNumero());

// Valida se o CPF é válido
var_dump(Documento::validarCPF($meuCpf));

?>