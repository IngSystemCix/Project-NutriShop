<?php
    // Verificar el enlace generado
    $link = APP_URL."config/lang.php?lang=" . ($idioma === 'es' ? 'en' : 'es');
?>

<header class="absolute z-0 top-0 right-0 w-full sm:w-[97.5%]  font-bold h-20 flex flex-row items-center justify-center bg-white-bone dark:bg-dark-gray px-5">
    <div class="w-[80%] h-auto flex justify-center items-center">
        <img src="./app/view/img/logo_light.png" class="w-12 mr-5">
        <div class="flex items-center relative">
            <input type="text" placeholder="<?php echo $palabras["HEADER"]["barra_de_busqueda"]; ?>" class="w-48 sm:w-96 pl-3 py-2 pr-10 rounded-full outline-none">
            <i class="bi bi-search h-5 w-5 text-black absolute top-[.5rem] right-[.5rem]"></i>
        </div>
    </div>
    <div class="w-[20%] hidden sm:flex items-center gap-1">
        <a href="#" class="flex justify-center items-center text-blue-gray dark:text-white-bone">
            <i class="bi bi-person-circle h-6 w-6"></i>
            <span class="w-32"><?php echo $palabras["HEADER"]["cuenta_header"]; ?></span>
        </a>
        <a href="<?php echo $link; ?>" class="flex justify-center items-center w-full cursor-pointer">
            <i class="bi bi-globe-asia-australia h-6 w-6 text-blue-gray dark:text-white-bone"></i>
            <span class="ml-2 text-blue-gray dark:text-white-bone w-full"><?php echo $idioma === 'es' ? 'ES' : 'EN'; ?></span>
        </a>
        <a href="#" class="flex justify-center items-center w-full">
            <i class="bi bi-cart3 h-6 w-6 text-blue-gray dark:text-white-bone"></i>
            <span class="ml-2 text-orange-light w-full">S/0.00</span>
        </a>
    </div>
</header>