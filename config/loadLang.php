<?php
// Iniciar sesión y configurar el nombre de la sesión
session_name(APP_SESSION_NAME_LANG);
session_start();

// Verificar si hay un idioma almacenado en la sesión
if (isset($_SESSION[APP_SESSION_NAME_LANG])) {
    $idioma = $_SESSION[APP_SESSION_NAME_LANG];
} else {
    $idioma = 'es'; // Idioma por defecto
}

// Cargar el archivo de idioma correspondiente
$archivo = file_exists(__DIR__."/../lang/$idioma.ini") ? __DIR__."/../lang/$idioma.ini" : __DIR__."/../lang/es.ini";
$palabras = parse_ini_file($archivo, true);