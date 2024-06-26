const select = document.querySelector('.select');
const subMenuSelect = select.querySelector('.subMenuSelect');
const opcionesIdioma = subMenuSelect.querySelectorAll('a');
let checkSelect = true;

select.addEventListener('click', () => {
    if (checkSelect) {
        subMenuSelect.classList.add('flex');
        subMenuSelect.classList.remove('hidden');
        select.querySelector('i').classList.add('rotate-180');
    }else {
        subMenuSelect.classList.remove('flex');
        subMenuSelect.classList.add('hidden');
        select.querySelector('i').classList.remove('rotate-180');
    }
    checkSelect = !checkSelect;
});

document.addEventListener('click', (evento) => {
    if (!select.contains(evento.target)) {
        subMenuSelect.classList.remove('flex');
        subMenuSelect.classList.add('hidden');
        select.querySelector('i').classList.remove('rotate-180');
        checkSelect = true;
    }
});

opcionesIdioma.forEach((elemeto) => {
    elemeto.addEventListener('click', (evento) => {
        select.querySelector('span').textContent = evento.target.textContent;
    });
});