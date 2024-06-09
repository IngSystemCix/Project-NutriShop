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
    <title><?php echo APP_NAME." | ".$palabras["INDEX"]["titulo_index"]; ?></title>
</head>
<body class="w-full h-lvh bg-white-bone dark:bg-dark-gray flex flex-col-reverse sm:flex-row justify-center items-center">
    <?php require_once "./app/view/inc/header.php" ?>
    <main class="absolute z-0 top-0 right-0 w-full sm:w-[97.5%] h-auto p-5 mt-12">
        <div class="w-full flex justify-center items-center">
            <div id="banner">
                <div id="contenedor-img">
                    <img src="<?php echo APP_URL."app/view/img/1.png" ?>" alt="banner1" class="banner">
                    <img src="<?php echo APP_URL."app/view/img/2.png" ?>" alt="banner2" class="banner">
                    <img src="<?php echo APP_URL."app/view/img/3.png" ?>" alt="banner3" class="banner">
                </div>
                <div id="button-carrusel">
                    <span class="circulo active"></span>
                    <span class="circulo"></span>
                    <span class="circulo"></span>
                </div>
            </div>
        </div>
        <h1 class="mt-5 w-full text-indigo dark:text-white-bone flex justify-center items-center teko-regular text-3xl font-bold"><?php echo $palabras["INDEX"]["titulo_conozcan_nuestro_producto_index"]; ?></h1>
        <div class="mt-5 w-full h-full gap-5 grid place-content-center place-items-center grid-cols-1 sm:grid-cols-3 sm:grid-rows-1">
            <div class="w-full h-full bg-white dark:bg-gray-dark rounded-lg p-6">
                <em class="text-2xl font-bold text-indigo dark:text-green-dark letter anton-regular letter-spacing-1"><?php echo $palabras["INDEX"]["etiqueta_galletas_index"]; ?></em>
                <hr class="w-full h-1 bg-indigo dark:bg-green-dark">
                <p class="text-justify mt-5 text-gray-dark dark:text-white-bone">
                    <ul class="flex flex-col justify-center items-start gap-10 text-gray-dark dark:text-white-bone">
                        <li><b><?php echo $palabras["INDEX"]["subtitulo1_galletas_index"]; ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo1_galletas_index"]; ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo2_galletas_index"]; ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo2_galletas_index"]; ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo3_galletas_index"]; ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo3_galletas_index"]; ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo4_galletas_index"]; ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo4_galletas_index"]; ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo5_galletas_index"]; ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo5_galletas_index"]; ?></li>
                    </ul>
                </p>
            </div>
            <div class="w-full h-full bg-white dark:bg-gray-dark rounded-lg p-6">
                <em class="text-2xl font-bold text-indigo dark:text-green-dark letter anton-regular letter-spacing-1"><?php echo $palabras["INDEX"]["etiqueta_chocolates_index"]; ?></em>
                <hr class="w-full h-1 bg-indigo dark:bg-green-dark">
                <p class="text-justify mt-5 text-gray-dark dark:text-white-bone">
                    <ul class="flex flex-col justify-center items-start gap-10 text-gray-dark dark:text-white-bone">
                        <li><b><?php echo $palabras["INDEX"]["subtitulo1_chocolates_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo1_chocolates_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo2_chocolates_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo2_chocolates_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo3_chocolates_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo3_chocolates_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo4_chocolates_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo4_chocolates_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo5_chocolates_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo5_chocolates_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo6_chocolates_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo6_chocolates_index"] ?></li>
                    </ul>
                </p>
            </div>
            <div class="w-full h-full bg-white dark:bg-gray-dark rounded-lg p-6">
                <em class="text-2xl font-bold text-indigo dark:text-green-dark letter anton-regular letter-spacing-1"><?php echo $palabras["INDEX"]["etiqueta_ofertas_index"]; ?></em>
                <hr class="w-full h-1 bg-indigo dark:bg-green-dark">
                <p class="text-justify mt-5 text-gray-dark dark:text-white-bone">
                    <ul class="flex flex-col justify-center items-start gap-10 text-gray-dark dark:text-white-bone">
                        <li><b><?php echo $palabras["INDEX"]["subtitulo1_ofertas_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo1_ofertas_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo2_ofertas_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo2_ofertas_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo3_ofertas_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo3_ofertas_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo4_ofertas_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo4_ofertas_index"] ?></li>
                        <li><b><?php echo $palabras["INDEX"]["subtitulo5_ofertas_index"] ?></b> <?php echo $palabras["INDEX"]["contexto_subtitulo5_ofertas_index"] ?></li>
                    </ul>
                </p>
            </div>
        </div>
    </main>
    <div class="fixed bottom-14 sm:bottom-4 right-4 rounded-lg w-10 h-10 bg-indigo text-white-bone font-bold flex justify-center items-center select-none cursor-pointer" id="button_theme">
        <span class="material-symbols-outlined">
        brightness_6
        </span>
    </div>
    <?php require_once "./app/view/inc/bar.php" ?>
    <script src="<?php echo SCRIPT_THEME; ?>"></script>   
    <script src="<?php echo SCRIPT_NAVBAR; ?>"></script>
    <script src="<?php echo SCRIPT_SLIDER; ?>"></script>
</body>
</html>