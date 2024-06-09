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
    <title><?php echo APP_NAME." | ".$palabras["OFERTAS"]["titulo_ofertas"]; ?></title>
</head>
<body class="w-full h-lvh bg-white-bone dark:bg-dark-gray flex flex-col sm:flex-row justify-center items-center">
    <?php require_once "./app/view/inc/header.php" ?>
    <main class="absolute z-0 top-0 right-0 w-full sm:w-[97.5%] h-auto p-5 mt-12">
        <div class="w-full h-full flex flex-col justify-center items-start gap-10 mt-20">
            <h2 class="text-indigo dark:text-white font-bold text-5xl w-full flex justify-center items-center teko-regular"><?php echo $palabras["OFERTAS"]["titulo_ofertas"]?></h2>
        </div>
        
        <div class="w-full h-full place-content-center place-items-center gap-x-5 gap-y-32 mt-10 mb-20 sm:mt-20 grid grid-cols-1 sm:grid-cols-4 sm:grid-rows-4">
            <?php 
            for ($i = 0; $i < 9; $i++) {
                require "./app/view/inc/boxCard.php";
            }
            ?>
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
</body>
</html>