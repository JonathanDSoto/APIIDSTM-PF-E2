const togglePass = document.getElementById('togglePass');
const pass = document.getElementById('password');

togglePass.addEventListener('click', function () {
    const type = pass.getAttribute('type') === 'password' ? 'text' : 'password';
    pass.setAttribute('type', type);
    this.classList.toggle('fa-eye-slash');
});

const form = document.getElementById('formAuthentication');
form.addEventListener('submit', function (e) {
    e.preventDefault();
});