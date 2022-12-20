<?php

    $dir = 'arquivos';
    $permissoes = '0775';

    if(!is_dir($dir)){
        // Permissoes: 0 = Nada, 5 = Leitura e execução, 6 = Leitura e gravação, 7 = Leitura, gravação e execução

        mkdir($dir, $permissoes);
    }

    echo 'Diretório criado com sucesso!';