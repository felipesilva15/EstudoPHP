<!-- Utilizar sempre o enctype para enviar o arquivo  -->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUploaded">
    <button type="submit">Enviar</button>
</form>

<?php
    // Caso seja um post, realiza a leitura do arquivo
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // Pega o arquivo através da variável $_FILES
        $file = $_FILES["fileUploaded"];
        $dirUpload = "uploads";

        // Caso tenha ocorrido um erro, o exibe na tela
        if($file["error"]){
            throw new Exception("Error: ".$file["error"]);
        }

        // Cria o diretório caso não exista
        if (!is_dir($dirUpload)){
            mkdir($dirUpload);
        }

        // Move efetivamente o arquivo para a pasta do servidor
        if(move_uploaded_file($file["tmp_name"], $dirUpload.DIRECTORY_SEPARATOR.$file["name"])){
            echo "Upload realizado com sucesso";
        }else{
            echo "Erro ao realizar o upload";
        }
    }
?>