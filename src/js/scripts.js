// Función para crear la cookie
function createCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

// Función para ocultar el banner de cookies
function hideCookieBanner() {
    var banner = document.getElementById("cookieBanner");
    banner.style.display = "none";
}

// Verifica si la cookie existe al cargar la página
window.onload = function() {
    var accepted = getCookie("cookie_accepted");
    if (accepted === "true") {
        hideCookieBanner();
    }
};

// Función para leer el valor de una cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Agrega un escuchador de eventos "click" al botón "Aceptar"
document.getElementById("acceptCookies").addEventListener("click", function() {
    createCookie("cookie_accepted", "true", 30);
    hideCookieBanner();
});
