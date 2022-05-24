const btnMobile = document.getElementById('btn-mobile');

function toggleMenu (event){

    if(event.type === 'touchstart') event.preventDefault();  //prevenir de ativar o click 

    const Header = document.getElementById('header') ;
    Header.classList.toggle('active');

    const nav = document.getElementById('nav');
    nav.classList.toggle('active');


}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);
