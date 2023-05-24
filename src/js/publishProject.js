import { getProfiles, createProject, addProfileToProject } from './api.js';

const profilesContainer = document.getElementById('categoria-proyecto');


const createUserProject = async () => {
  const name = document.getElementById('nombre-proyecto').value;
  const description = document.getElementById('descripcion-proyecto').value;
  const userId = localStorage.getItem('id');
  
  const projectId = await createProject(name, description, userId);
  const checkboxes = [...document.querySelectorAll('.checkboxprofiles:checked')];
  const values = checkboxes.map(checkbox => checkbox.value);

  for (const value of values) {
    await addProfileToProject(projectId, value);
  }
  window.location.href = './index.php';
}

const renderProfiles = (profiles) => {
  const profilesHTML = profiles.map(profile => {
    return `<div class="perfildevmatch">
      <input class="checkboxprofiles" type="checkbox" value="${profile.id_perfil}">
      <label for="tienda1">${profile.nombre_perfil}</label><br>
    </div>`;
  });
  profilesContainer.innerHTML = profilesHTML.join('');
}

const getData = async () => {
  renderProfiles(await getProfiles());
};

window.addEventListener('load', () => {
  getData();
});
window.createUserProject = createUserProject;
