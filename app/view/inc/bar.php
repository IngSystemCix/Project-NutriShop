<div class="absolute top-0 left-0 w-full h-full bg-opacity-95 bg-dark-gray flex-col-reverse sm:flex-row hidden" id="background-opciones-sidebar"></div>

<!-- Este es el NAVBAR DE DESKTOP -->
<nav class="fixed top-0 left-0 w-12 hidden h-full sm:flex flex-col gap-10 bg-indigo select-none teko-regular py-3" id="sidebar-desktop">
  <div class="text-white-bone px-3 py-2 flex justify-end items-center" id="btn-list">
    <span class="material-symbols-outlined cursor-pointer">list</span>
  </div>
  <ul class="flex flex-col gap-6">
    <li class="btn relative btn_navbar_normal">
      <a href="<?php echo APP_URL."index.php"; ?>" class="flex gap-4">
        <span class="material-symbols-outlined">home</span>
        <span class="text-btn hidden"><?php echo $palabras["SIDEBAR"]["btn_inicio"]; ?></span>
      </a>
    </li>
    <li class="btn relative btn_navbar_normal">
      <a href="<?php echo APP_URL."galletas.php"; ?>" class="flex gap-4">
        <span class="material-symbols-outlined">cookie</span>
        <span class="text-btn hidden"><?php echo $palabras["SIDEBAR"]["btn_galleta"]; ?></span>
      </a>
    </li>
    <li class="btn relative btn_navbar_normal">
      <a href="<?php echo APP_URL."chocolates.php"; ?>" class="flex gap-4">
        <span class="material-symbols-outlined">cards</span>
        <span class="text-btn hidden"><?php echo $palabras["SIDEBAR"]["btn_chocolate"]; ?></span>
      </a>
    </li>
    <li class="btn relative btn_navbar_normal">
      <a href="<?php echo APP_URL."acerca_de.php"; ?>" class="flex gap-4">
        <span class="material-symbols-outlined">help</span>
        <span class="text-btn hidden"><?php echo $palabras["SIDEBAR"]["btn_preguntas"]; ?></span>
      </a>
    </li>
    <li class="btn relative btn_navbar_special">
      <a href="<?php echo APP_URL."ofertas.php"; ?>" class="flex gap-4">
        <span class="material-symbols-outlined">percent</span>
        <span class="text-btn hidden"><?php echo $palabras["SIDEBAR"]["btn_ofertas"]; ?></span>
      </a>
    </li>
  </ul>
</nav>

<!-- Este es el NAVBAR de mobile -->
<div class="fixed bottom-0 left-0 w-full select-none">
  <div class="w-full h-auto grid-cols-3 place-items-center place-content-center bg-indigo sm:hidden py-8 gap-y-5 text-white-bone border border-white-bone border-solid border-r-transparent border-l-transparent border-t-transparent transition-transform hidden" id="opciones-navbar">
    <a href="<?php echo APP_URL."galletas.php"; ?>" class="w-10 h-10">
      <span class="material-symbols-outlined">cookie</span>
    </a>
    <a href="<?php echo APP_URL."chocolates.php"; ?>" class="w-10 h-10">
      <span class="material-symbols-outlined">cards</span>
    </a>
    <a href="<?php echo APP_URL."acerca_de.php"; ?>" class="w-10 h-10">
      <span class="material-symbols-outlined">help</span>
    </a>
    <a href="<?php echo APP_URL."acerca_de.php"; ?>" class="w-10 h-10 text-orange-light">
      <span class="material-symbols-outlined">percent</span>
    </a>
  </div>
  <nav class="w-full bg-indigo sm:hidden">
    <ul class="flex justify-center items-center gap-10 sm:hidden">
      <li class="btn-mobile relative btn_navbar_mobile_normal" id="btn_menu">
        <a class="cursor-pointer"><span class="material-symbols-outlined">menu</span></a>
      </li>
      <li class="btn-mobile relative btn_navbar_mobile_normal">
        <a href="<?php echo APP_URL."index.php"; ?>" class="cursor-pointer"><span class="material-symbols-outlined">home</span></a>
      </li>
      <li class="btn-mobile relative btn_navbar_mobile_normal">
        <a class="cursor-pointer"><span class="material-symbols-outlined">account_circle</span></a>
      </li>
      <li class="btn-mobile relative btn_navbar_mobile_normal">
        <a class="cursor-pointer"><span class="material-symbols-outlined">shopping_cart</span></a>
      </li>
    </ul>
  </nav>
</div>