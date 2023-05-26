import { login } from './api.js';

/**
 * Perform login with provided email and password.
 * @function doLogin
 * @returns {void} Does not return a value.
 */
const doLogin = () => {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  login(email, password).then((success) => {
    if (!success) {
      const element = document.getElementById('alert-message2');
      element.innerText = 'CREDENCIALES NO VÁLIDAS';
      element.style.display = 'block';
      setTimeout(() => {
        element.style.display = 'none';
      }, 5000);
    }
  });
};

/**
 * Check if the user is a new user and display a message accordingly.
 * @function checkIsNewUser
 * @returns {void} Does not return a value.
 */
const checkIsNewUser = () => {
  const isNewUser = localStorage.getItem('isNewUser');
  const element = document.getElementById('alert-message');
  if (isNewUser === 'true') {
    localStorage.setItem('isNewUser', 'false');
    element.innerText = 'USUARIO CREADO CORRECTAMENTE';
    element.style.display = 'block';
    setTimeout(() => {
      element.style.display = 'none';
    }, 5000);
  }
};

window.doLogin = doLogin;

window.addEventListener('load', () => {
  checkIsNewUser();
});
