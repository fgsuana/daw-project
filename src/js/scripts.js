
// Función para crear la cookie
function createCookie(name, value, days) {
  let expires = '';
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = `; expires=${date.toUTCString()}`;
  }
  document.cookie = `${name}=${value}${expires}; path=/`;
}

// Función para ocultar el banner de cookies
function hideCookieBanner() {
  const banner = document.getElementById('cookieBanner');
  banner.style.display = 'none';
}

// Función para leer el valor de una cookie
function getCookies() {
  const cookies = {};
  const cookieStrings = document.cookie.split(';');
  cookieStrings.forEach((cookieString) => {
    const [name, value] = cookieString.split('=');
    const cookieName = name.trim();
    const cookieValue = decodeURIComponent(value.trim());
    cookies[cookieName] = cookieValue;
  });
  return cookies;
}

// Verifica si la cookie existe al cargar la página
window.onload = function () {
  const cookies = getCookies();
  const accepted = cookies.cookie_accepted;
  if (accepted === 'true') {
    hideCookieBanner();
  }
};

// Agrega un escuchador de eventos 'click' al botón 'Aceptar'
document.getElementById('acceptCookies').addEventListener('click', () => {
  createCookie('cookie_accepted', 'true', 30);
  hideCookieBanner();
});


    // Mostrar el botón cuando se desplaza hacia abajo
    window.addEventListener('scroll', scrollFunction);

    function scrollFunction() {
      var myButton = document.getElementById("myButton");
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        myButton.style.display = "block";
      } else {
        myButton.style.display = "none";
      }
    }

    // Ir al principio de la página cuando se hace clic en el botón
    function goToTop() {
      document.body.scrollTop = 0; // Para Safari
      document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
    }