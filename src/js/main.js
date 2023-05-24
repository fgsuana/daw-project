import { getProjects , getProfilesByProjectId, addUserToProject } from './api.js';

let projects = [];

const checkLogging = () => {
  const isLogged = localStorage.getItem('isLogged');
  return isLogged === 'true';
};

const buildRoles = async (id) => {
  const profiles = await getProfilesByProjectId(id);
  const button = checkLogging() ? `<button class="unirsebtn" onclick="applyToProject(${id})">Unirse</button>` : '';
  const registerAlert = checkLogging() ? '' : '<span class="registeralert">⚠️ Debes <a href="./registro.php">registrarte</a> para poder unirte al proyecto</span>';

  return profiles.map((profile) => {
    return `<div class="profile-row">${profile.nombre_perfil}</div>
    ${registerAlert}
    ${button}`;
  }).join('');
};

const renderProjects = async (projects) => {
  const contenedorTrabajos = document.querySelector('.trabajos');

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
  projects = await getProjects();
  renderProjects(projects);
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
const applyToProject = (id) => {
  const idUser = localStorage.getItem('id');
  addUserToProject(idUser, id, 'candidate');
}

const searchProject = () => {
  const search =  document.getElementById('search').value;
  const filteredProjects = projects.filter(project => {
    const nombreEncontrado = project.nombre_proyecto.toLowerCase().includes(search.toLowerCase());
    const descripcionEncontrada = project.descripcion_proyecto.toLowerCase().includes(search.toLowerCase());
    
    return nombreEncontrado || descripcionEncontrada;
  });
  renderProjects(filteredProjects);

}

const clearSearch = () => {
  document.getElementById('search').value = '';
  renderProjects(projects);
}

window.applyToProject = applyToProject;
window.searchProject = searchProject;
window.clearSearch = clearSearch;
window.addEventListener('load', () => {
  createDatabase();
});
