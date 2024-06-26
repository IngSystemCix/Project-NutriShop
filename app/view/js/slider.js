const circulos = document.querySelectorAll('.circulo');
const banners = document.querySelectorAll('.banner');

circulos.forEach((circulo, index) => {
    circulo.addEventListener('click', () => {
        circulos.forEach(c => c.classList.remove('active'));
        circulo.classList.add('active');
        banners.forEach(banner => {
            banner.style.transform = `translateX(${index * -100}%)`;
        });
    });
});

let index = 0;
let direction = -1; // 1 para avanzar, -1 para retroceder

function activarSiguienteCirculo() {
    circulos.forEach(c => c.classList.remove('active'));
    circulos[index].classList.add('active');

    banners.forEach(banner => {
        banner.style.transform = `translateX(${index * -100}%)`;
    });

    index += direction;

    if (index >= circulos.length) {
        index = circulos.length - 2;
        direction = -1;
    } else if (index < 0) {
        index = 1;
        direction = 1;
    }
}

activarSiguienteCirculo();
setInterval(activarSiguienteCirculo, 2000);
