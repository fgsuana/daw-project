import {
  getProjects,
  getProfilesByProjectId,
  addUserToProject,
  checkUserProjectRegistration,
} from './api.js';

let projects = [];
let contenedorTrabajos = [];

/**
 * Checks if the user is logged in.
 * @function checkLogging
 * @returns {boolean} Returns `true` if the user is logged in, `false` otherwise.
 */
const checkLogging = () => {
  const isLogged = localStorage.getItem('isLogged');
  return isLogged === 'true';
};

/**
 * Checks if the user owns the project.
 * @async
 * @function ownProject
 * @param {number} projectId - The project ID.
 * @param {string} userId - The user ID.
 * @returns {Promise<boolean>} A promise that resolves to `true` if the user
 * does not own the project,`false` otherwise.
 */
const ownProject = async (projectId, userId) => !await checkUserProjectRegistration(projectId, userId);

/**
 * Builds the roles HTML for a project.
 * @async
 * @function buildRoles
 * @param {number} projectId - The project ID.
 * @param {string} userId - The user ID.
 * @returns {Promise<string>} A promise that resolves to the roles HTML string.
 */
const buildRoles = async (projectId, userId) => {
  const profiles = await getProfilesByProjectId(projectId);
  const button = checkLogging() && await ownProject(projectId, userId) ? `<button class="unirsebtn" onclick="applyToProject(${projectId})">Unirse</button>` : '';
  const registerAlert = checkLogging() ? '' : '<span class="registeralert">⚠️ Debes <a href="./registro.php">registrarte</a> para poder unirte al proyecto</span>';

  return profiles.map((profile) => `<div class="profile-row">${profile.nombre_perfil}</div>${registerAlert} ${button}`).join('');
};

/**
 * Renders the projects on the page.
 * @async
 * @function renderProjects
 * @param {Array} pro - An array of project objects.
 * @returns {Promise<void>} A promise that resolves once the projects are rendered.
 */
const renderProjects = async (pro) => {
  contenedorTrabajos = document.querySelector('.trabajos');

  const projectsHTML = await Promise.all(pro.map(async (project) => {
    const projectId = project.id_proyecto;
    const userId = localStorage.getItem('id');
    const rolesHTML = await buildRoles(projectId, userId);
    return `<div class="trabajo">
      <div class="trabajotitle">${project.nombre_proyecto}</div>
      <div class="trabajodescrp">${project.descripcion_proyecto}</div>
      <div class="profiles">${rolesHTML}</div>
    </div>`;
  }));

  contenedorTrabajos.innerHTML = projectsHTML.join('');
};

/**
 * Fetches the project data and renders it on the page.
 * @async
 * @function getData
 * @returns {Promise<void>} A promise that resolves once the data is fetched and rendered.
 */
const getData = async () => {
  projects = await getProjects();
  renderProjects(projects);
};

/**
 * Creates the database by making a GET request to the backend.
 * @function createDatabase
 * @returns {void}
 */
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

/**
 * Applies to join a project.
 * @async
 * @function applyToProject
 * @param {number} projectId - The project ID.
 * @returns {Promise<void>} A promise that resolves once the user is added to the project
 * and the projects are re-rendered.
 */
const applyToProject = async (projectId) => {
  const userId = localStorage.getItem('id');
  await addUserToProject(userId, projectId, 'candidate');
  renderProjects(projects);
};

/**
 * Searches for projects based on the given search query.
 * @function searchProject
 * @returns {void}
 */
const searchProject = () => {
  const search = document.getElementById('search').value;
  const filteredProjects = projects.filter((project) => {
    const nombreEncontrado = project.nombre_proyecto.toLowerCase().includes(search.toLowerCase());
    const descripcionEncontrada = project.descripcion_proyecto.toLowerCase()
      .includes(search.toLowerCase());

    return nombreEncontrado || descripcionEncontrada;
  });

  renderProjects(filteredProjects);
};

window.applyToProject = applyToProject;
window.searchProject = searchProject;
window.addEventListener('load', () => {
  createDatabase();
});
