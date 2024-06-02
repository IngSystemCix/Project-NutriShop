<?php
    session_name(APP_SESSION_NAME_LANG);
    session_start();

    if(isset($_SESSION[APP_SESSION_NAME_LANG])) {
        $idioma = $_SESSION[APP_SESSION_NAME_LANG];
    }else {
        $idioma = 'es';
    }

    $archivo = file_exists(__DIR__."/../lang/$idioma.ini") ? __DIR__."/../lang/$idioma.ini" : __DIR__."/../lang/es.ini";
    $palabras = parse_ini_file($archivo, true);