/**
 * Display a success message indicating that a message has been sent.
 * @function sendMessage
 * @returns {void} Does not return a value.
 */
function sendMessage() {
  var nombre = document.getElementById("nombreInput").value;
  var correo = document.getElementById("correoInput").value;
  var telefono = document.getElementById("telefonoInput").value;
  var asunto = document.getElementById("asuntoInput").value;
  var mensaje = document.getElementById("mensajeInput").value;
  
  if (nombre !== "" && correo !== "" && telefono !== "" && asunto !== "" && mensaje !== "") {
    const element = document.getElementById('alert-message');
    element.innerText = 'MENSAJE ENVIADO CORRECTAMENTE';
    element.style.display = 'block';
    setTimeout(() => {
      element.style.display = 'none';
    }, 5000);
  }

  var camposVacios = [];
  
  if (nombre === "") {
    camposVacios.push('nombre');
  }
  
  if (correo === "") {
    camposVacios.push('correo');
  }
  
  if (telefono === "") {
    camposVacios.push('telefono');
  }
  
  if (asunto === "") {
    camposVacios.push('asunto');
  }
  
  if (mensaje === "") {
    camposVacios.push('mensaje');
  }
  
  if (camposVacios.length === 0) {
    const element = document.getElementById('alert-message');
    element.innerText = 'MENSAJE ENVIADO CORRECTAMENTE';
    element.style.display = 'block';
    setTimeout(() => {
      element.style.display = 'none';
    }, 5000);
  } else {
    camposVacios.forEach((campo) => {
      const element = document.getElementById('alert-message-' + campo);
      element.innerText = 'Rellena el campo ' + campo;
      element.style.display = 'block';
      setTimeout(() => {
        element.style.display = 'none';
      }, 3000);
    });
  }
}

