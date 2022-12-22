<?php

    session_start();

    var_dump(session_id());

    // Depois de verificar login e senha, reinicie o ID da sessão
    session_destroy();

    session_start();

    session_regenerate_id();

    var_dump(session_id());

