/**
 * Creates a cookie with the specified name, value, and expiration period in days.
 * @param {string} name - The name of the cookie.
 * @param {string} value - The value to be stored in the cookie.
 * @param {number} days - The number of days until the cookie expires.
 */
function createCookie(name, value, days) {
  let expires = '';
  if (days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = `; expires=${date.toUTCString()}`;
  }
  document.cookie = `${name}=${value}${expires}; path=/`;
}

/**
 * Hides the cookie banner from view.
 */
function hideCookieBanner() {
  const banner = document.getElementById('cookieBanner');
  banner.style.display = 'none';
}

/**
 * Retrieves all the cookies associated with the current document.
 * @returns {Object} - An object containing the cookie names as keys and their corresponding values.
 */
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

window.onload = function () {
  const cookies = getCookies();
  const accepted = cookies.cookie_accepted;
  if (accepted === 'true') {
    hideCookieBanner();
  }
};

document.getElementById('acceptCookies').addEventListener('click', () => {
  createCookie('cookie_accepted', 'true', 30);
  hideCookieBanner();
});
