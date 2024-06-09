<?php
require_once "./config/app.php";
require_once "./autoload.php";
require_once("./config/loadLang.php");
require_once "./app/view/inc/script.php";

if (isset($_GET['view'])) {
    $url = explode("/", $_GET['view']);
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

<head>
    <?php require_once "./app/view/inc/head.php"; ?>
    <title><?php echo APP_NAME . " | " . $palabras["LOGIN"]["titulo_inicio_de_sesion"]; ?></title>
</head>

<body class="w-full h-lvh bg-white-bone dark:bg-dark-gray flex flex-col-reverse sm:flex-row justify-center items-center">
    <div class="w-full flex flex-col justify-center items-center gap-3">
        <form action="" method="post" class="w-[80%] sm:w-[60%] h-auto rounded-lg bg-white dark:bg-gray-dark flex justify-center items-center p-3 sm:p-16">
            <div class="hidden sm:block w-full h-[25.8rem] p-3 border border-solid border-l-transparent border-t-transparent border-r-blue-gray border-b-transparent">
                <div class="w-full h-full flex flex-col justify-start items-start gap-3">
                    <img src="./app/view/img/logo_light.png" alt="logo" class="w-32">
                    <span class="w-full text-black dark:text-white-bone teko-regular text-4xl"><?php echo $palabras["LOGIN"]["etiqueta_ingresar"] ?></span>
                </div>
            </div>
            <div class="w-full h-full p-6 flex flex-col justify-center items-start gap-6 border border-solid border-l-transparent sm:border-l-blue-gray border-t-transparent border-r-transparent border-b-transparent">
                <img src="./app/view/img/logo_light.png" alt="logo" class="block sm:hidden w-16">
                <label class="w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["LOGIN"]["etiqueta_de_la_entrada_de_texto_correo_electronico"]; ?></span>
                    <input type="email" name="email" id="email" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full px-3 py-2" placeholder="example@nutrishop.com" autocomplete="off">
                </label>
                <label class="relative w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["LOGIN"]["etiqueta_de_la_entrada_de_texto_contrasena"]; ?></span>
                    <input type="password" name="pass" id="pass" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full pl-3 py-2 pr-8" placeholder="••••••••••••••••••••••••••••••">
                    <i class="bi bi-eye-slash absolute bottom-[.5rem] right-3 cursor-pointer text-black dark:text-white-bone" id="eye-pass"></i>
                </label>
                <div class="w-full flex flex-col justify-center items-center gap-6">
                    <a href="#" class="w-full flex justify-end items-center font-bold text-indigo dark:text-green-dark"><?php echo $palabras["LOGIN"]["enlace_olvidaste_tu_contrasena"]; ?></a>
                    <P class="w-full text-blue-gray dark:text-white-bone"><?php echo $palabras["LOGIN"]["sugerencia_modo_invitado"]; ?></P>
                </div>
                <div class="w-full flex justify-end items-center gap-4">
                    <div class="bg-white-bone dark:bg-white text-black dark:text-dark-gray px-3 py-2 rounded-lg font-bold cursor-pointer"><?php echo $palabras["LOGIN"]["opcion_registrate"]; ?></div>
                    <input type="submit" value="<?php echo $palabras["LOGIN"]["opcion_iniciar_sesion"] ?>" class="bg-indigo text-white-bone px-3 py-2 rounded-lg font-bold cursor-pointer">
                </div>
            </div>
        </form>
        <div class="select">
            <span class="dark:text-white"> <?php echo $idioma === 'es' ? 'Español (Latinoamérica)' : 'English (United States)' ?> </span>
            <i class="bi bi-caret-down-fill dark:text-white"></i>
            <div class="subMenuSelect hidden">
                <a href="<?php echo APP_URL."config/lang.php?lang=es"; ?>">Español (Latinoamérica)</a>
                <a href="<?php echo APP_URL."config/lang.php?lang=en"; ?>">English (United States)</a>
            </div>
        </div>
    </div>    
    <div class="fixed bottom-14 sm:bottom-4 right-4 rounded-lg w-10 h-10 bg-indigo text-white-bone font-bold flex justify-center items-center select-none cursor-pointer" id="button_theme">
        <span class="material-symbols-outlined">
            brightness_6
        </span>
    </div>
    <script src="<?php echo SCRIPT_THEME; ?>"></script>
    <script src="<?php echo SCRIPT_SHOW_PASS_LOGIN; ?>"></script>
    <script src="<?php echo SCRIPT_COMBO_BOX_LANG; ?>"></script>
</body>

</html>