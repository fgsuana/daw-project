import { getProfiles, getProjects } from './api.js';

let profiles = [];
let projects = [];



const doSomething = () => {
  console.log(profiles);
  console.log(projects);
};

const contenedorTrabajos = document.querySelector('.trabajos');



const getData = async () => {
  //profiles = await getProfiles();
  projects = await getProjects();
  // TODO: cambiar nombre cuando se pinte
  renderProjects(projects);
  doSomething();
};


//Prueba joel

const renderProjects = (projects) => {
  projects.forEach(project => {
    const proyectoDiv = document.createElement('div');
    proyectoDiv.classList.add('trabajo');
    
    const nombreProyecto = document.createElement('div');
    nombreProyecto.innerText = project.nombre_proyecto;
    
    const descripcionProyecto = document.createElement('div');
    descripcionProyecto.innerText = project.descripcion_proyecto;
    
    proyectoDiv.appendChild(nombreProyecto);
    proyectoDiv.appendChild(descripcionProyecto);
    contenedorTrabajos.appendChild(proyectoDiv);
  });
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
