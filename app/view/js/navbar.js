//===================== Desktop

const btnMenuDesktop = document.querySelectorAll('.btn');
const textMenuDesktop = document.querySelectorAll('.text-btn');
const btnToggle = document.querySelector('#btn-list');
const sidebar = document.querySelector('#sidebar-desktop');
const backgroundOpenSidebar = document.querySelector('#background-opciones-sidebar');
let checkOpenSidebar = true;

// ocultar la barra

btnToggle.querySelector('span').addEventListener('click', () => {
    if (checkOpenSidebar) {
        sidebar.classList.remove('w-12');
        sidebar.classList.add('w-40');
        textMenuDesktop.forEach((text) => {
            text.classList.remove('hidden');
        });
        backgroundOpenSidebar.classList.remove('hidden');
        backgroundOpenSidebar.classList.add('flex');
        btnToggle.querySelector('span').textContent = 'close';
    }else {
        sidebar.classList.add('w-12');
        sidebar.classList.remove('w-40');
        textMenuDesktop.forEach((text) => {
            text.classList.add('hidden');
        });
        backgroundOpenSidebar.classList.add('hidden');
        backgroundOpenSidebar.classList.remove('flex');
        btnToggle.querySelector('span').textContent = 'list';
    }
    checkOpenSidebar = !checkOpenSidebar;
});

// botón activo

btnMenuDesktop.forEach((btn) => {
    btn.addEventListener('click', () => {
        btnMenuDesktop.forEach((btn) => {
            if(btn.classList[2] != 'btn_navbar_special') {
                btn.classList.remove('btn_activate_desktop');
            }else {
                btn.classList.remove('btn_activate_desktop_especial');
            }
        });

        if(btn.classList[2] != 'btn_navbar_special') {
            btn.classList.add('btn_activate_desktop');
        }else {
            btn.classList.add('btn_activate_desktop_especial');
        }
    });
});

//===================== Mobile

const btnMenu = document.querySelector('#btn_menu');
const opcionesNavbar = document.querySelector('#opciones-navbar');
const btnsNavbar = document.querySelectorAll('#btn-mobile');
let checkOpenNavbar = true;

btnMenu.addEventListener('click', () => {
    if (checkOpenNavbar) {
        backgroundOpenSidebar.classList.remove('hidden');
        opcionesNavbar.classList.remove('hidden');
        opcionesNavbar.classList.add('grid');
    }else {
        backgroundOpenSidebar.classList.add('hidden');
        opcionesNavbar.classList.add('hidden');
        opcionesNavbar.classList.remove('grid');
    }
    checkOpenNavbar = !checkOpenNavbar;
});

btnsNavbar.forEach((btn) => {
    btn.addEventListener('click', () => {
        btnsNavbar.forEach((btn) => {
            if(btn.classList[2] != 'btn_navbar_mobile_special') {
                btn.classList.remove('btn_activate_mobile');
            }else {
                btn.classList.remove('btn_activate_mobile_especial');
            }
        });

        if(btn.classList[2] != 'btn_navbar_mobile_special') {
            btn.classList.add('btn_activate_mobile');
        }else {
            btn.classList.add('btn_activate_mobile_especial');
        }
    });
});