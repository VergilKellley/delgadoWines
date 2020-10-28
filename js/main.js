const menuIcon = document.querySelector('.hamburger-menu');
const mobileNavbar = document.querySelector('.mobile-navbar');

menuIcon.addEventListener('click', () => {
    mobileNavbar.classList.toggle('change')
})