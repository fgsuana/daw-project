import { getProfiles, getProjects } from './api.js';

let profiles = [];
let projects = [];

window.addEventListener('load', () => {
  createDatabase();
});

const createDatabase = () => {
  fetch('backend/create_database.php', {
    method: 'GET',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    }
  })
  .then(response => {
    getData();
  })
  .catch(error => {
    console.error(error);
  });
};

const getData = async () => {
  profiles = await getProfiles();
  projects = await getProjects();
}
