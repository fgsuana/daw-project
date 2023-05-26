import { getProfiles, createProject, addProfileToProject } from './api.js';

const profilesContainer = document.getElementById('categoria-proyecto');

/**
 * Create a user project with the selected profiles.
 * @async
 * @function createUserProject
 * @returns {Promise<void>} Does not return any explicit value.
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
 * Render profiles on the page.
 * @param {Array} profiles - An array of profiles.
 * @returns {void} Does not return a value.
 */
const renderProfiles = (profiles) => {
  const profilesHTML = profiles.map((profile) => `<div class="perfildevmatch">
    <input class="checkboxprofiles" type="checkbox" value="${profile.id_perfil}">
    <label for="tienda1">${profile.nombre_perfil}</label><br>
  </div>`);
  profilesContainer.innerHTML = profilesHTML.join('');
};

/**
 * Get data and render profiles on the page.
 * @async
 * @function getData
 * @returns {Promise<void>} Does not return any explicit value.
 */
const getData = async () => {
  renderProfiles(await getProfiles());
};

window.addEventListener('load', () => {
  getData();
});
window.createUserProject = createUserProject;
