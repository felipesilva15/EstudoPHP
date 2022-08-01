<?php

// Utilizando a função date e exibindo a data atual na tela
echo date("d/m/Y H:i:s");
echo "<br><br>";

// Utilizando timestamps diferentes para as datas
$timestamp = strtotime("2022-08-15");
echo "<b>Utilizando o timestamp do dia 15/08/2022</b><br>";
echo date("l, d/m/Y", $timestamp);
echo "<br><br>";

$timestamp = strtotime("now");
echo "<b>Utilizando o timestamp da data atual</b><br>";
echo date("l, d/m/Y", $timestamp);
echo "<br><br>";

$timestamp = strtotime("-1 month");
echo "<b>Utilizando o timestamp do mês anterior</b><br>";
echo date("l, d/m/Y", $timestamp);
echo "<br><br>";

?>