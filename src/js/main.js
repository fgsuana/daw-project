import { getProfiles, getProjects } from './api.js';

let profiles = [];
let projects = [];

// Prueba joel

const renderProjects = () => {
  const contenedorTrabajos = document.querySelector('.trabajos');
  projects.forEach((project) => {
    const proyectoDiv = document.createElement('div');
    proyectoDiv.classList.add('trabajo');

    const nombreProyecto = document.createElement('div');
    nombreProyecto.classList.add('trabajotitle');
    nombreProyecto.innerText = project.nombre_proyecto;

    const descripcionProyecto = document.createElement('div');
    descripcionProyecto.classList.add('trabajodescrp');
    descripcionProyecto.innerText = project.descripcion_proyecto;

    proyectoDiv.appendChild(nombreProyecto);
    proyectoDiv.appendChild(descripcionProyecto);
    contenedorTrabajos.appendChild(proyectoDiv);
  });
};

const getData = async () => {
  profiles = await getProfiles();
  projects = await getProjects();
  renderProjects();
  console.log(profiles);
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

window.addEventListener('load', () => {
  createDatabase();
});