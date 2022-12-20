<?php

    $email = $_POST['email'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret'=>'6LeCHZEjAAAAAHEEIKx5wnuLSq4xb8xZnNKNbWyA',
        'response'=>$_POST['g-token'],
        'remoteip'=>$_SERVER['REMOTE_ADDR']
    ]));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = json_decode(curl_exec($ch), true);

    curl_close($ch);

    if($response['success']){
        echo 'OK: '.$_POST['email'];
    }else{
        header('Location: exemplo-04.php');
    };