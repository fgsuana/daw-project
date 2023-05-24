export const getProfiles = async () => {
  try {
    const response = await fetch('../backend/profile/get_perfiles.php', {
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
    const { success, name, id } = JSON.parse(await response.text());
    if (success) {
      localStorage.setItem('isLogged', 'true');
      localStorage.setItem('userName', name);
      localStorage.setItem('id', id);

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
        id,
      }),
    });
    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const createUser = async (user) => {
  try {
    const response = await fetch('../backend/user/create_user.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(user),
    });
    if (!response.ok) {
      throw new Error('Error al insertar el usuario');
    }

    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const addProfileToUser = async (idUsuario, idPerfil) => {
  try {
    const response = await fetch('../backend/user/add_profile_to_user.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        idUsuario,
        idPerfil,
      }),
    });

    if (!response.ok) {
      throw new Error('Error al insertar los perfiles de usuario');
    }

    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const addProfileToProject = async (idProject, idProfile) => {
  try {
    const response = await fetch('../backend/project/add_profile_to_project.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        idProject,
        idProfile,
      }),
    });

    if (!response.ok) {
      throw new Error('Error al insertar los perfiles de proyecto');
    }
    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const addUserToProject = async (idUsuario, idPerfil, tipoUsuario) => {
  try {
    const response = await fetch('../backend/user/add_user_to_project.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        idUsuario,
        idPerfil,
        tipoUsuario,
      }),
    });

    if (!response.ok) {
      throw new Error('Error al insertar los registros en la tabla de usuario_proyecto');
    }

    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};

export const checkUserProjectRegistration = async (idProyecto, idUsuario) => {
  try {
    const response = await fetch('../backend/user/check_user_project_registration.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        idProyecto,
        idUsuario,
      }),
    });

    if (!response.ok) {
      throw new Error('Error al realizar la consulta en la tabla de usuario_proyecto');
    }

    const data = await response.json();
    return data;
  } catch (error) {
    return error;
  }
};
