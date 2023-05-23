import { getProfiles } from './api.js';
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
    checkbox.value = profile.id;
    checkbox.name = 'profile';
    checkbox.id = `profile-${profile.id}`;

    const label = document.createElement('label');
    label.textContent = profile.nombre_perfil;
    label.htmlFor = `profile-${profile.id}`;

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
