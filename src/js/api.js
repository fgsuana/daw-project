export const getProfiles = async () => {
  try {
    const response = await fetch(`../backend/profile/get_perfiles.php`, {
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
    const response = await fetch('../backend/project/get_projects.php', {
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
    const response = await fetch('../backend/project/create_project.php', {
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

export const login = async (email, password) => {
  try {
    const response = await fetch('../backend/user/login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: JSON.stringify({
        email,
        password,
      }),
    });
    const { success, name } = JSON.parse(await response.text());
    if (success) {
      localStorage.setItem('isLogged', 'true');
      localStorage.setItem('userName', name);
      window.location.href = './index.php';
    } else {
      console.log('error');
    }
    return 'login succesfull';
  } catch (error) {
    return error;
  }
};

export const getProfilesByProjectId = async (id) => {
  try {
    const response = await fetch('../backend/profile/get_profiles_by_project_id.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: JSON.stringify({
        id
      }),
    });
    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};