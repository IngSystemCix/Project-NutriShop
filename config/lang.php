<?php
require_once("./app.php");
// Iniciar sesión y configurar el nombre de la sesión
session_name(APP_SESSION_NAME_LANG);
session_start();

// Verificar si se ha pasado un nuevo idioma a través de la URL
if (isset($_GET['lang'])) {
    $new_lang = $_GET['lang'];
    $_SESSION[APP_SESSION_NAME_LANG] = $new_lang;
}

// Redirigir a la página anterior o a la página principal si no hay referencia previa
$previous_page = $_SERVER['HTTP_REFERER'];
header("Location: $previous_page");
exit();