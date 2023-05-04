import { login } from './api.js';

const doLogin = () => {
  const email = document.querySelector('input[type="text"]').value;
  const password = document.querySelector('input[type="password"]').value;
  login(email, password);
};

window.doLogin = doLogin;
