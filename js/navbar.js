const btnMenu = document.getElementById('btnBurger');
const Nav = document.getElementsByTagName('nav');

btnMenu.addEventListener('click', () => {
    Nav[0].classList.toggle('responsiveNav');
});