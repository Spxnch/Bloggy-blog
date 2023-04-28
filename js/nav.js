const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu-nav');

menuBtn.addEventListener('click', () => {
  menuBtn.classList.toggle('show');
  menu.classList.toggle('show');
}); 