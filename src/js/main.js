import { getProfiles, getProjects } from './api.js';

let profiles = [];
let projects = [];

const doSomething = () => {
  console.log(profiles);
  console.log(projects);
};

const getData = async () => {
  profiles = await getProfiles();
  projects = await getProjects();
  // TODO: cambiar nombre cuando se pinte
  doSomething();
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
