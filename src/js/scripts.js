const crearBaseDeDatos = () => {
  const xhr = new XMLHttpRequest();

  xhr.open('GET', 'backend/crear_bd.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        console.log(xhr.responseText);
      } else {
        console.error('Error en la petición');
      }
    }
  };

  xhr.send();
};

window.onload = () => {
  crearBaseDeDatos();
};
