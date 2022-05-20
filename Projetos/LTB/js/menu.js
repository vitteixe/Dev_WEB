const btnMobile = document.getElementById('btn-mobile');

function toggleMenu (){

    const Header = document.getElementById('header');


    const nav = document.getElementById('nav');

    nav.classList.toggle('active')

    Header.classList.toggle('active')
}

btnMobile.addEventListener('click', toggleMenu)