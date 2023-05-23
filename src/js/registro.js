import { getProfiles, createUser, addProfileToUser } from './api.js';
let profiles = [];

// Función para pintar los perfiles en la pantalla
const renderProfiles = () => {
  const checkboxContainer = document.getElementById('checkbox-container');

  // Limpiar el contenedor antes de agregar los nuevos perfiles
  checkboxContainer.innerHTML = '';

  // Recorrer el array de perfiles y crear los elementos de checkbox
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

window.addEventListener('load', () => {
  getData();
});

const getData = async () => {
  profiles = await getProfiles('../backend');
  renderProfiles();
};

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
    password
  });

  const checkboxes = [...document.querySelectorAll('.checkboxprofiles:checked')];
  const values = checkboxes.map(checkbox => checkbox.value);

  for (const value of values) {
    await addProfileToUser(id, value);
  }
  window.location.href = './login.php';
};

window.register = register;