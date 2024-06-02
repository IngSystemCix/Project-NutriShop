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
    <?php require_once "./app/view/inc/bar.php" ?>
    <main class="w-full h-full">

    </main>
    <script src="<?php echo SCRIPT_NAVBAR; ?>"></script>
</body>
</html>