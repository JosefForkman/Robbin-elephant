// Fetch the elements
const dateBtn = document.querySelector('button');
const showDate = document.querySelector('.date');

//add an eventlistener that listens after a click and toggle the date css class.
dateBtn.addEventListener('click', () => {
  showDate.classList.toggle('active');
});
