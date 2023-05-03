export const getProfiles = async () => {
  try {
    const response = await fetch('backend/get_perfiles.php', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    });
    const data = await response.json();
    return data;
  } catch (error) {
    console.error(error);
  }
};

export const getProjects = async () => {
  try {
    const response = await fetch('backend/get_projects.php', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      }
    });
    const data = await response.json();
    return data;
  } catch (error) {
    console.error(error);
  }
};