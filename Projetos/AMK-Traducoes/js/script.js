const btn = document.querySelector('#btn-mobile');

toggleMenu = (event) => {

    if(event.type === 'touchstart') event.preventDefault();

    const nav = document.querySelector('nav');
    
    nav.classList.toggle('active');

}

btn.addEventListener('click', toggleMenu);
btn.addEventListener('touchstart', toggleMenu);