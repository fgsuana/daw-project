sendMessage = () => {
  const element = document.getElementById('alert-message');
  element.innerText = "MENSAJE ENVIADO CORRECTAMENTE"
  element.style.display = 'block';
  localStorage.setItem('isNewUser', 'true');
  setTimeout(() => {
    element.style.display = 'none';
  }, 5000);
}