<?php
    $texto = "felipe silva";

    // maiúsculo
    $texto = strtoupper($texto);

    echo $texto;
    echo "<br>";

    // minúsculo
    $texto = strtolower($texto);

    echo $texto;
    echo "<br>";

    // Primeira letra de cada palavra maiúscula (camel case)
    echo ucwords($texto);
    echo "<br>";

    // Primeira letra maiúscula
    echo ucfirst($texto);
    echo "<br>";


?>