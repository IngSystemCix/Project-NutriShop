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
<html lang="es">
<head>
    <?php require_once "./app/view/inc/head.php"; ?>
    <title><?php echo APP_NAME." | ".$palabras["ACERCA_DE"]["titulo_acerca_de"]; ?></title>
</head>
<body class="w-full h-lvh bg-white-bone dark:bg-dark-gray flex flex-col-reverse sm:flex-row justify-center items-center">
    <?php require_once "./app/view/inc/header.php" ?>
    <main class="absolute z-0 top-0 right-0 w-full sm:w-[97.5%] h-auto p-5 mt-12">
        <div class="w-full h-full flex flex-col justify-center items-start gap-10 mt-20">
            <h1 class="text-indigo dark:text-green-dark font-bold text-5xl w-full flex justify-center items-center teko-regular"><?php echo $palabras["ACERCA_DE"]["titulo_historia_de_la_empresa_acerca_de"];?></h1>
            <p class="text-black dark:text-white-bone font-semibold text-justify"><?php echo $palabras ["ACERCA_DE"]["contenido_historia_de_la_empresa_acerca_de"];?></p>
            <h1 class="text-indigo dark:text-green-dark font-bold text-5xl w-full flex justify-center items-center teko-regular"><?php echo $palabras["ACERCA_DE"]["preguntas_frecuentes_acerca_de"]; ?></h1>
        </div>
        <div class="w-full h-full flex flex-col justify-center items-start gap-7 mb-20 sm:mb-0">
            <h2 class="text-indigo dark:text-green-dark font-bold text-xl anton-regular letter-spacing-1"><?php echo $palabras["ACERCA_DE"]["preguntas_sobre_productos_acerca_de"];?></h2>

            <hr class="w-full h-1 bg-indigo dark:bg-green-dark">

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta1_acerca_de"];?></em>

            <p class= "text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta1_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta2_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta2_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta3_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta3_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta4_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta4_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta5_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta5_acerca_de"];?></p>

            <h2 class = "text-indigo dark:text-green-dark font-bold text-xl anton-regular letter-spacing-1"><?php echo $palabras["ACERCA_DE"]["pregunta_tiempo_envio_acerca_de"];?></h2>

            <hr class="w-full h-1 bg-indigo dark:bg-green-dark">

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta6_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta6_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta7_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta7_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta8_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta8_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta9_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta9_acerca_de"];?></p>

            <h2 class = "text-indigo dark:text-green-dark font-bold text-xl anton-regular letter-spacing-1"><?php echo $palabras["ACERCA_DE"]["preguntas_sobre_devoluciones_cambios"];?></h2>

            <hr class="w-full h-1 bg-indigo dark:bg-green-dark">

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta10_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta10_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta11_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta11_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta12_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta12_acerca_de"];?>.</p>

            <h2 class = "text-indigo dark:text-green-dark font-bold text-xl anton-regular letter-spacing-1"><?php echo $palabras["ACERCA_DE"]["pregunta_metodo_pago_acerca_de"];?></h2>

            <hr class="w-full h-1 bg-indigo dark:bg-green-dark">

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta13_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta13_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta14_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta14_acerca_de"];?></p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta15_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta15_acerca_de"];?></p>
            
            <h2 class = "text-indigo dark:text-green-dark font-bold text-xl anton-regular letter-spacing-1"><?php echo $palabras["ACERCA_DE"]["preguntas_generales_acerca_de"];?></h2>

            <hr class="w-full h-1 bg-indigo dark:bg-green-dark">

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta16_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta16_acerca_de"];?> <a href="mailto:nutrishop@gmail.com">nutrishop@gmail.com</a>, o llamándonos al <a href="tel:+51123456789">+51 123 456 789</a>.</p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta17_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta17_acerca_de"];?>.</p>

            <em class= "font-bold text-2xl dark:text-orange-light text-red-light"><?php echo $palabras["ACERCA_DE"]["pregunta18_acerca_de"];?></em>

            <p class= " text-black dark:text-white-bone"><?php echo $palabras["ACERCA_DE"]["respuesta_pregunta18_acerca_de"];?>.</p>

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