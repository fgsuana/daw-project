import { getProfiles, getProjects } from './api.js';

let profiles = [];
let projects = [];

const doSomething = () => {
  console.log(profiles);
  console.log(projects);
};

const getData = async () => {
  profiles = await getProfiles();
  projects = await getProjects();
  // TODO: cambiar nombre cuando se pinte
  doSomething();
};

const createDatabase = () => {
  fetch('backend/create_database.php', {
    method: 'GET',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
  })
    .then(() => {
      getData();
    })
    .catch((error) => {
      console.error(error);
    });
};

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

window.logout = logout;
window.addEventListener('load', () => {
  createDatabase();
  checkLogging();
});
