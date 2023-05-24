/**
 * Sets the display style of the "my-button" element based on the scroll position.
 * If the scroll position is greater than 20 pixels, the element is displayed; otherwise, it is hidden.
 * @returns {void}
 */
function scrollFunction() {
  const myButton = document.getElementById('my-button');
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    myButton.style.display = 'block';
  } else {
    myButton.style.display = 'none';
  }
}

/**
 * Scrolls the page to the top when the "my-button" element is clicked.
 * @returns {void}
 */
// eslint-disable-next-line no-unused-vars
function goToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

window.addEventListener('scroll', scrollFunction);
