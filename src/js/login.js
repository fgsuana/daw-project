import { login } from './api.js';

const doLogin = () => {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  login(email, password).then((success) => {
    if (!success) {
      const errorDiv = document.createElement('div');
      errorDiv.textContent = 'Credenciales no válidas';
      document.body.appendChild(errorDiv);
    }
  });
};

const checkIsNewUser = () => {
  const isNewUser = localStorage.getItem('isNewUser');
  const element = document.getElementById('alert-message');
  
  if (isNewUser === 'true') {
    element.innerText = "MENSAJE ENVIADO CORRECTAMENTE"
    element.style.display = 'block';
    localStorage.setItem('isNewUser', 'true');
    setTimeout(() => {
      element.style.display = 'none';
    }, 5000);
  }
};

window.doLogin = doLogin;

window.addEventListener('load', () => {
  checkIsNewUser();
});