export const getProfiles = async () => {
  try {
    const response = await fetch('backend/profile/get_perfiles.php', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
    });
    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const getProjects = async () => {
  try {
    const response = await fetch('backend/project/get_projects.php', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
    });
    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const createProject = async (projectName, projectDescription, id) => {
  try {
    const response = await fetch('backend/project/create_project.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: JSON.stringify({
        projectName,
        projectDescription,
        id,
      }),
    });
    const data = await response.text();
    return data;
  } catch (error) {
    return error;
  }
};

export const login = async (username, password) => {
  try {
    const response = await fetch('../backend/user/login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: JSON.stringify({
        username,
        password,
      }),
    });
    const result = await response.text();
    if (result === 'success') {
      localStorage.setItem('isLogged', 'true');
      window.location.href = '../index.html';
    } else {
      console.log('error');
    }
    return 'login succesfull';
  } catch (error) {
    return error;
  }
};
