import { getProfiles, createUser, addProfileToUser } from './api.js';

let profiles = [];

/**
 * Renders the profiles by dynamically creating checkboxes and labels for each profile.
 */
const renderProfiles = () => {
  const checkboxContainer = document.getElementById('checkbox-container');

  checkboxContainer.innerHTML = '';
  profiles.forEach((profile) => {
    const valorInputPerfilDiv = document.createElement('div');
    valorInputPerfilDiv.classList.add('valorinputperfil');

    const checkbox = document.createElement('input');
    checkbox.classList.add('checkboxprofiles');
    checkbox.type = 'checkbox';
    checkbox.value = profile.id_perfil;
    checkbox.name = 'profile';
    checkbox.id = `profile-${profile.id_perfil}`;

    const label = document.createElement('label');
    label.textContent = profile.nombre_perfil;
    label.htmlFor = `profile-${profile.id_perfil}`;

    valorInputPerfilDiv.appendChild(checkbox);
    valorInputPerfilDiv.appendChild(label);

    checkboxContainer.appendChild(valorInputPerfilDiv);
  });
};

/**
 * Retrieves the profiles from the API and renders them.
 */
const getData = async () => {
  profiles = await getProfiles('../backend');
  renderProfiles();
};

/**
 * Registers a user by creating a user and associating selected profiles with the user.
 */

const register = async () => {
  const name = document.getElementById('name').value;
  const lastName = document.getElementById('lastName').value;
  const email = document.getElementById('email').value;
  const telephone = document.getElementById('telephone').value;
  const password = document.getElementById('password').value;

  const { id } = await createUser({
    name,
    lastName,
    email,
    telephone,
    password,
  });

  const checkboxes = Array.from(document.querySelectorAll('.checkboxprofiles:checked'));

  checkboxes.forEach(async (checkbox) => {
    await addProfileToUser(id, checkbox.value);
  });
  localStorage.setItem('isNewUser', 'true');
  window.location.href = './login.php';
};

window.addEventListener('load', () => {
  getData();
});

window.register = register;
