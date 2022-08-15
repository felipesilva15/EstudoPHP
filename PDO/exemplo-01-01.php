<?php

// Realiza a conexão com o BD
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "sa", "spy");

// Realiza a execução da SELECT no BD
$stmt = $conn->prepare("SELECT usu.pkId as ID, usu.dsLogin as Login, usu.dsSenha as Senha, date_format(usu.dtCadastro, '%d/%m/%Y %H:%i:%s') as DtCadastro FROM tb_usuarios usu ORDER BY dsLogin");
$stmt->execute();

// Recebe os dados
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Cria cabeçalho e início do hmtl
$html = "<table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Dt. Cadastro</th>
                </tr>";

foreach($data as $row){
    // Abre a tag da linha da tabela
    $html .= "<tr>";

    foreach($row as $key => $value){
        // Insere as tags das celulas da tabela
        $html .= "<td>".$value."</td>";
    }

    // Fecha a tag da linha da tabela
    $html .= "</tr>";
}

// Fecha o html
$html .= "</tbody></table>";

echo $html;

?>