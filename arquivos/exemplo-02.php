<?php

$directory = "assets";
$images = scandir($directory);
$data = array();

foreach ($images as $img) {
    if(!in_array($img, array(".", ".."))){
        $filename = $directory.DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);
        $info["size"] = filesize($filename)."B";
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = str_replace(" ", "%20", str_replace("\\", "/", "http://localhost/EstudoPHP/arquivos/$filename"));

        array_push($data, $info);
    }
}

echo json_encode($data);
