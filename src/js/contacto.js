/**
 * Display a success message indicating that a message has been sent.
 * @function sendMessage
 * @returns {void} Does not return a value.
 */
const sendMessage = () => {
  const element = document.getElementById('alert-message');
  element.innerText = 'MENSAJE ENVIADO CORRECTAMENTE';
  element.style.display = 'block';
  setTimeout(() => {
    element.style.display = 'none';
  }, 5000);
};
