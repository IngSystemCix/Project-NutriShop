const inputPass = document.querySelector('#pass');
const eyePass = document.querySelector('#eye-pass');
let checkEyePass = true;

eyePass.addEventListener('click', () => {
    if (checkEyePass) {
        eyePass.classList.remove('bi-eye-slash');
        eyePass.classList.add('bi-eye');
        inputPass.type = 'text';
    }else {
        eyePass.classList.add('bi-eye-slash');
        eyePass.classList.remove('bi-eye');
        inputPass.type = 'password';
    }
    checkEyePass = !checkEyePass;
});