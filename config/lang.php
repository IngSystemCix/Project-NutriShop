<?php
    session_name(APP_SESSION_NAME_LANG);
    session_start();

    if(isset($GET['lang'])) {
        $new_lang = $GET['lang'];
        $_SESSION[APP_SESSION_NAME_LANG] = $new_lang;
    }

    $previus_page = $_SERVER['HTTP_REFERER'];
    header("Location: $previus_page");
    exit();