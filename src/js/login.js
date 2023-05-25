import { login } from './api.js';

const doLogin = () => {
  const email = document.querySelector('input[type="text"]').value;
  const password = document.querySelector('input[type="password"]').value;
  login(email, password).then((success) => {
    if (!success) {
      const errorDiv = document.createElement('div');
      errorDiv.textContent = 'Credenciales no válidas';
      document.body.appendChild(errorDiv);
    }
  });
};

window.doLogin = doLogin;
