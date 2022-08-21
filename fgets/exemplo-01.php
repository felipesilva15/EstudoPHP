<?php

$filename = "usuarios.csv";
$data = array();

if(file_exists($filename)){
    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file));

    while($row = fgets($file)){
        $rowData = explode(",", fgets($file));
        $linha = array();

        for ($i=0; $i < count($headers); $i++) { 
            $linha[$headers[$i]] = $rowData[$i];
        }

        array_push($data, $linha);
    }

    fclose($file);
}

echo json_encode($data);