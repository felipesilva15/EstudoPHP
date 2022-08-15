<?php

// array da hierarquia de funcionários
$hierarquia = array(
    array(
        "cargo"=>"CEO",
        "subordinados"=>array(
            array(
                "cargo"=>"Diretor Comercial",
                "subordinados"=>array(
                    array(
                        "cargo"=>"Gerente de vendas"
                    )
                )
            ),
            array(
                "cargo"=>"Diretor Financeiro",
                "subordinados"=>array(
                    array(
                        "cargo"=>"Gerente de contas a pagar",
                        "subordinados"=>array(
                            array(
                                "cargo"=>"Supervisor financeiro" 
                            )
                        )
                    ),
                    array(
                        "cargo"=>"Gerente de compras",
                        "subordinados"=>array(
                            array(
                                "cargo"=>"Supervisor de compras" 
                            )
                        )
                    )
                )
            )
        )
    )
);

// Função para montar o HTML com uma lista ordenada desta hierarquia
function exibirHierarquia($cargos){
    $html = "<ul>";

    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo["cargo"];

        // Caso possua subordinados, realiza a criação de uma nova lista ordenada(novo nível)
        if (isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0){
            $html .= exibirHierarquia($cargo["subordinados"]);
        }

        $html .= "</li>";
    }

    $html .= "</ul>";

    return $html;
}

echo exibirHierarquia($hierarquia);

?>