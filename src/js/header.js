const checkLogging = () => {
  const isLogged = localStorage.getItem('isLogged');
  const publishElement = document.getElementById('publish-project');
  const logoutElement = document.getElementById('logout-text');
  const loginElement = document.getElementById('login-text');
  const userNameText = document.getElementById('user-name-text');
  const userName = document.getElementById('user-name');

  if (isLogged === 'true') {
    publishElement.style.display = 'inline-block';
    logoutElement.style.display = 'inline-block';
    userNameText.style.display = 'inline';
    loginElement.style.display = 'none';
    userName.textContent = localStorage.getItem('userName');
  } else {
    publishElement.style.display = 'none';
    logoutElement.style.display = 'none';
    userNameText.style.display = 'none';
    loginElement.style.display = 'inline-block';
  }
};

const logout = () => {
  localStorage.setItem('isLogged', 'false');
  checkLogging();
};
const checkRoute = () => {
  const route = window.location.href;
  const logo = document.getElementById('logo');

  if (route.includes('src')) {
    logo.src = 'img/logo.png';
  } else {
    logo.src = 'src/img/logo.png';
  }
};
window.logout = logout;
window.addEventListener('load', () => {
  checkRoute();
  checkLogging();
});