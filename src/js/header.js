/**
 * Checks the login status and shows/hides elements accordingly.
 * Retrieves login information stored in local storage.
 * Updates DOM elements based on the login status.
 * @returns {void}
 */
const checkLogging = () => {
  const isLogged = localStorage.getItem('isLogged');
  const publishElement = document.getElementById('publish-project');
  const logoutElement = document.getElementById('logout-text');
  const loginElement = document.getElementById('login-text');
  const userNameText = document.getElementById('user-name-text');
  const userName = document.getElementById('user-name');
  const userNameAdmin = document.getElementById('user-name-admin');
  const idregistro = document.getElementById('idregistro');

  if (isLogged === 'true') {
    publishElement.style.display = 'inline-block';
    logoutElement.style.display = 'inline-block';
    userNameText.style.display = 'inline';
    loginElement.style.display = 'none';
    userName.textContent = localStorage.getItem('userName');
    idregistro.style.display = 'none';
    if (userNameAdmin) {
      userNameAdmin.textContent = localStorage.getItem('userName');
    }
  } else {
    publishElement.style.display = 'none';
    logoutElement.style.display = 'none';
    userNameText.style.display = 'none';
    loginElement.style.display = 'inline-block';
  }
};

/**
 * Logs out the user by updating the login status in local storage
 * and redirects the user to the index.php page.
 * @returns {void}
 */
const logout = () => {
  localStorage.setItem('isLogged', 'false');
  window.location.href = './index.php';
};

window.logout = logout;
window.addEventListener('load', () => {
  checkLogging();
});
