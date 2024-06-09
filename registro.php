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
    <title><?php echo APP_NAME . " | " . $palabras["REGISTRO"]["titulo_registro"]; ?></title>
</head>

<body class="w-full h-lvh bg-white-bone dark:bg-dark-gray flex flex-col-reverse sm:flex-row justify-center items-center">
    <div class="w-full flex flex-col justify-center items-center gap-3">
        <form action="" method="post" class="w-[80%] sm:w-[60%] h-auto p-4 sm:p-10 bg-white dark:bg-gray-dark shadow-md flex flex-col justify-center gap-6 items-center rounded-lg">
            <div class="w-full flex justify-center items-center gap-3">
                <img src="./app/view/img/logo_light.png" alt="logo" class="w-16">
                <h1 class="w-full text-indigo dark:text-white-bone font-bold flex justify-center items-center text-3xl teko-regular"><?php echo $palabras["REGISTRO"]["titulo_formulario_regitrio"]; ?></h1>
            </div>
            <div class="w-full grid place-content-center place-items-center gap-y-3 gap-x-10 grid-cols-1 sm:grid-cols-2 grid-rows-4">
                <label class="w-full flex flex-col justify-start items-center gap-3">
                    <span class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_nombre_formulario_registro"]; ?></span>
                    <input type="text" name="input_nombre" placeholder="<?php echo $palabras["REGISTRO"]["etiqueta_nombre_formulario_registro"]; ?>" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full px-3 py-2">
                </label>
                <label class="w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_apellido_paterno_formulario_registro"]; ?></span>
                    <input type="text" name="input_apellido_paterno" placeholder="<?php echo $palabras["REGISTRO"]["etiqueta_apellido_paterno_formulario_registro"]; ?>" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full px-3 py-2">
                </label>
                <label class="w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_apellido_materno_formulario_registro"]; ?></span>
                    <input type="text" name="input_apellido_materno" placeholder="<?php echo $palabras["REGISTRO"]["etiqueta_apellido_materno_formulario_registro"]; ?>" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full px-3 py-2">
                </label>
                <label class="w-full flex flex-col justify-start items-center gap-3 custom-datetime-local">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_fecha_de_nacimiento_formulario_registro"]; ?></span>
                    <input type="date" name="datetime" id="datetime" class="input text-gray-400 dark:text-white-bone bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full px-3 py-2">
                </label>
                <label class="w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_correo_formulario_registro"]; ?></span>
                    <input type="email" name="email" id="email" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full px-3 py-2" placeholder="example@nutrishop.com" autocomplete="off">
                </label>
                <label class="relative w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_contrasena_formualrio_registro"]; ?></span>
                    <input type="password" name="pass" id="pass" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full pl-3 py-2 pr-8" placeholder="••••••••••••••••••••••••••••••">
                    <i class="bi bi-eye-slash absolute bottom-[.5rem] right-3 cursor-pointer text-blue-gray dark:text-white-bone" id="eye-pass"></i>
                </label>
                <label class="relative w-full flex flex-col justify-start items-center gap-3">
                    <span  class="w-full font-bold text-blue-gray dark:text-white-bone"><?php echo $palabras["REGISTRO"]["etiqueta_repetir_contrasena_formualrio_registro"]; ?></span>
                    <input type="password" name="repeat_pass" id="repeat_pass" class="input bg-transparent border border-solid border-blue-gray dark:border-white-bone rounded-full pl-3 py-2 pr-8" placeholder="••••••••••••••••••••••••••••••">
                    <i class="bi bi-eye-slash absolute bottom-[.5rem] right-3 cursor-pointer text-blue-gray dark:text-white-bone" id="eye-repeat-pass"></i>
                </label>
            </div>
            <input type="submit" value="<?php echo $palabras["REGISTRO"]["boton_registrarse"]; ?>" class="w-full bg-indigo text-white-bone px-3 py-2 rounded-lg font-bold cursor-pointer">
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
    <script src="<?php echo SCRIPT_SHOW_PASS_REGISTRO; ?>"></script>
    <script src="<?php echo SCRIPT_COMBO_BOX_LANG; ?>"></script>
</body>
</html>