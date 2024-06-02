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
<html lang="<?php echo $idioma; ?>" class="transition-colors ease-in-out duration-[2s]">

<head>
  <?php require_once "./app/view/inc/head.php"; ?>
  <title><?php echo APP_NAME . " | " . $palabras["ERROR403"]["titulo_error_403"]; ?></title>
</head>

<body class="h-lvh w-full flex flex-col sm:flex-row justify-center items-center gap-[2rem] bg-white-bone dark:bg-dark-gray text-dark-gray dark:text-white-bone">
  <img src="./app/view/img/error403.png" alt="Imagen del Error 403">
  <div class="w-full h-32 px-5 sm:px-0 sm:w-80 sm:h-full text-justify flex flex-col justify-center items-start select-none">
    <h1 class="anton-regular text-8xl uppercase">Error 403</h1>
    <small class="cairo-regular text-lg"><?php echo $palabras["ERROR403"]["mensaje_advertencia_error_403"] ?> <a href="<?php echo APP_URL.'index.php'; ?>" class="underline text-indigo dark:text-green-dark font-bold text-sm"><?php echo $palabras["ERROR403"]["link_error_403"] ?></a></small>
  </div>
  <div class="absolute bottom-4 right-4 rounded-lg w-10 h-10 bg-indigo text-white-bone font-bold flex justify-center items-center select-none cursor-pointer" id="button_theme">
    <span class="material-symbols-outlined">
      brightness_6
    </span>
  </div>
  <script src="<?php echo SCRIPT_THEME; ?>"></script>
</body>

</html>