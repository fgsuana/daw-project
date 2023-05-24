import { getProfiles, createProject, addProfileToProject } from './api.js';

const profilesContainer = document.getElementById('categoria-proyecto');

/**
 * Crea un proyecto de usuario con los perfiles seleccionados.
 * @async
 * @function createUserProject
 * @returns {Promise<void>} No devuelve ningún valor explícito.
 */
const createUserProject = async () => {
  const name = document.getElementById('nombre-proyecto').value;
  const description = document.getElementById('descripcion-proyecto').value;
  const userId = localStorage.getItem('id');

  const projectId = await createProject(name, description, userId);
  const checkboxes = [...document.querySelectorAll('.checkboxprofiles:checked')];
  const values = checkboxes.map((checkbox) => checkbox.value);

  values.forEach(async (value) => {
    await addProfileToProject(projectId, value);
  });
  window.location.href = './index.php';
};

/**
 * Renderiza los perfiles en el contenedor especificado.
 * @function renderProfiles
 * @param {Array<object>} profiles - Los perfiles a renderizar.
 * @returns {void} No devuelve ningún valor.
 */
const renderProfiles = (profiles) => {
  const profilesHTML = profiles.map((profile) => `<div class="perfildevmatch">
    <input class="checkboxprofiles" type="checkbox" value="${profile.id_perfil}">
    <label for="tienda1">${profile.nombre_perfil}</label><br>
  </div>`);
  profilesContainer.innerHTML = profilesHTML.join('');
};

/**
 * Obtiene los perfiles y renderiza la lista.
 * @async
 * @function getData
 * @returns {Promise<void>} No devuelve ningún valor explícito.
 */
const getData = async () => {
  renderProfiles(await getProfiles());
};

window.addEventListener('load', () => {
  getData();
});
window.createUserProject = createUserProject;
