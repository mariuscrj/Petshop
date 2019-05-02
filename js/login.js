var loginTrigger = document.querySelector('.js-login-trigger');
var loginWindow = document.querySelector('.js-login');

loginTrigger.onclick = function () {
    loginWindow.classList.toggle('is-show');
}