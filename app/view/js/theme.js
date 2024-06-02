const tagHtml = document.querySelector("html");
const btnTheme = document.querySelector("#button_theme");
let checkTheme = true;

btnTheme.addEventListener("click", () => {
    let isDarkMode = localStorage.getItem('darkMode') === 'true';
    isDarkMode = !isDarkMode; // Invierte el estado del modo oscuro

    if (isDarkMode) {
        btnTheme.querySelector('span').textContent = 'nights_stay'; // Cambia a 'nights_stay' para el tema oscuro
        tagHtml.classList.add('dark');
    } else {
        btnTheme.querySelector('span').textContent = 'brightness_6'; // Cambia a 'brightness_6' para el tema claro
        tagHtml.classList.remove('dark');
    }

    // Guarda el estado del modo oscuro
    localStorage.setItem('darkMode', isDarkMode.toString());
});

// Verifica si el tema oscuro está activado al cargar la página
window.onload = function() {
    checkDarkMode();
};

// Función para verificar si el tema oscuro está activado
function checkDarkMode() {
    const isDarkMode = localStorage.getItem('darkMode') === 'true';

    if (isDarkMode) {
        tagHtml.classList.add('dark');
        btnTheme.querySelector('span').textContent = 'nights_stay'; // Cambia a 'nights_stay' para el tema oscuro
    } else {
        tagHtml.classList.remove('dark');
        btnTheme.querySelector('span').textContent = 'brightness_6'; // Cambia a 'brightness_6' para el tema claro
    }
}