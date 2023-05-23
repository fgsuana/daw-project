import { getProjects , getProfilesByProjectId } from './api.js';


const checkLogging = () => {
  const isLogged = localStorage.getItem('isLogged');
  return isLogged === 'true';
};

const buildRoles = async (id) => {
  const profiles = await getProfilesByProjectId(id);
  const button = checkLogging() ? '<button>Unirse</button>' : '';
  const registerAlert = checkLogging() ? '' : '<span class="registeralert">⚠️ Debes <a href="./src/registro.html">registrarte</a> para poder unirte al proyecto</span>';

  return profiles.map((profile) => {
    return `<div class="profile-row">${profile.nombre_perfil}</div>
    ${registerAlert}
    ${button}`;
  }).join('');
};

const renderProjects = async () => {
  const contenedorTrabajos = document.querySelector('.trabajos');
  const projects = await getProjects();

  const projectsHTML = await Promise.all(projects.map(async (project) => {
    const projectId = project.id_proyecto;
    const rolesHTML = await buildRoles(projectId);
    
    return `<div class="trabajo">
      <div class="trabajotitle">${project.nombre_proyecto}</div>
      <div class="trabajodescrp">${project.descripcion_proyecto}</div>
      <div class="profiles">${rolesHTML}</div>
    </div>`;
  }));

  contenedorTrabajos.innerHTML = projectsHTML.join('');
};

const getData = async () => {
  renderProjects();
};

const createDatabase = () => {
  fetch('../backend/create_database.php', {
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
