const checkLogging = () => {
  const isLogged = localStorage.getItem('isLogged');
  const publishElement = document.getElementById('publish-project');
  const logoutElement = document.getElementById('logout-text');
  const loginElement = document.getElementById('login-text');
  const userNameText = document.getElementById('user-name-text');
  const userName = document.getElementById('user-name');
  const userNameAdmin = document.getElementById('user-name-admin');
  const idregistro = document.getElementById("idregistro");


  if (isLogged === 'true') {
    publishElement.style.display = 'inline-block';
    logoutElement.style.display = 'inline-block';
    userNameText.style.display = 'inline';
    loginElement.style.display = 'none';
    userName.textContent = localStorage.getItem('userName');
    idregistro.style.display = 'none';
    if(userNameAdmin) {
      userNameAdmin.textContent = localStorage.getItem('userName');
    }
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

window.logout = logout;
window.addEventListener('load', () => {
  checkLogging();
});
