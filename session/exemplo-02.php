<?php

// Utilizando a sessão
require_once("config.php");

if(isset($_SESSION)){
    print_r($_SESSION);
    echo "<br>";
}

// session_unset();

// if(isset($_SESSION)){
//     print_r($_SESSION);
//     echo "<br>";
// }

?>