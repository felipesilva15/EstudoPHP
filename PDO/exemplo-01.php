<?php

// Realiza a conexão com o BD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");

// Realiza a execução da SELECT no BD
$stmt = $conn->prepare("SELECT usu.pkId as ID, usu.dsLogin as Login, usu.dsSenha as Senha, date_format(usu.dtCadastro, '%d/%m/%Y %H:%i:%s') as DtCadastro FROM tb_usuarios usu ORDER BY dsLogin");
$stmt->execute();

// Recebe os dados
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $row){
    foreach($row as $key => $value){
        echo "<b>".$key."</b>: ".$value."<br>";
    }

    echo "<br>-----------------------------------------------<br><br>";
}

?>