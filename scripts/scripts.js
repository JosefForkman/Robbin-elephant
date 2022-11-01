const dateBtn = document.querySelector('button');
const showDate = document.querySelector('.date');

dateBtn.addEventListener('click', () => {
  showDate.classList.toggle('active');
});
