<?php
    $id = (isset($_GET['id']) ? $_GET['id'] : 1);

    if(!is_numeric($id) || strlen($id) > 5){
        exit('Opa, comando não permitido!');
    }

    $conn = new mysqli('localhost', 'root', 'root', 'dbphp7');

    $sql = "SELECT * FROM TB_USUARIOS WHERE idUsuario = $id";

    $exec = mysqli_query($conn, $sql);

    while ($result = mysqli_fetch_object($exec)) {
        echo $result->dsNome.'<br>';
    }