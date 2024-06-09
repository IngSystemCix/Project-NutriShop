// REGISTRO

const inputPass = document.querySelector('#pass');
const inputRepeatPass = document.querySelector('#repeat_pass');
const eyePass = document.querySelector('#eye-pass');
const eyeRepeatPass = document.querySelector('#eye-repeat-pass');
let checkEyePass = true;
let checkEyeRepeatPass = true;

eyePass.addEventListener('click', () => {
    if(checkEyePass) {
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

eyeRepeatPass.addEventListener('click', () => {
    if(checkEyePass) {
        eyeRepeatPass.classList.remove('bi-eye-slash');
        eyeRepeatPass.classList.add('bi-eye');
        inputRepeatPass.type = 'text';
    }else {
        eyeRepeatPass.classList.add('bi-eye-slash');
        eyeRepeatPass.classList.remove('bi-eye');
        inputRepeatPass.type = 'password';
    }
    checkEyeRepeatPass = !checkEyeRepeatPass;
});