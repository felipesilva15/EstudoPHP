<?php

// Seta a localidade
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Classe de data
$date = new DateTime();

// Pega um período de 14 dias a partir da data atual
$periodo = new DateInterval("P14D");

// Data e hora atual 
echo $date->format("d/m/Y H:i:s");
echo "<br>";

// Adiciona o período especificado
$date->add($periodo);

// Exibe a nova data na tela
echo $date->format("d/m/Y H:i:s");

?>