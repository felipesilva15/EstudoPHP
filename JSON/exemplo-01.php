<?php

    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Felipe',
        'idade'=>18
    ));

    array_push($pessoas, array(
        'nome'=>'José',
        'idade'=>48
    ));

    // Print do array
    // print_r($pessoas);
    // echo '<br>';

    // Serializando o Array para um JSON
    // echo json_encode($pessoas);
    // echo '<br>';

    $jsonPessoas = '[{"nome":"Felipe","idade":18},{"nome":"Jos\u00e9","idade":48}]';
    $dataPessoas = json_decode($jsonPessoas, true);

    print_r($dataPessoas);
    echo '<br>';
?>