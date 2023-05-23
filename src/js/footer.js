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