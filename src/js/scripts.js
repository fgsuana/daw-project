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
function getCookie(name) {
  const nameEQ = `${name}'='`;
  const ca = document.cookie.split(';');
  for (let i = 0; i < ca.length; i += 1) {
    let c = ca[i];
    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

// Verifica si la cookie existe al cargar la página
window.onload = function () {
  const accepted = getCookie('cookie_accepted');
  if (accepted === 'true') {
    hideCookieBanner();
  }
};

// Agrega un escuchador de eventos 'click' al botón 'Aceptar'
document.getElementById('acceptCookies').addEventListener('click', () => {
  createCookie('cookie_accepted', 'true', 30);
  hideCookieBanner();
});
