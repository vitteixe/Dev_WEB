const btn = document.querySelector('#btn-mobile');


function toggleMenu(event) {

    if (event.type === "touchstart") event.preventDefault();

    const nav = document.querySelector('nav');

    nav.classList.toggle('active')

}

btn.addEventListener('click', toggleMenu);
btn.addEventListener('touchstart', toggleMenu);

const animacao = document.querySelectorAll('[data-animated');
const classeAnimada = 'animate';

function animacaoScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) /4);

    animacao.forEach(function(elemento){

        if((windowTop) > elemento.offsetTop){
            elemento.classList.add(classeAnimada);
        } else{
            elemento.classList.remove(classeAnimada);
        }
    })

}

animacaoScroll();

window.addEventListener('scroll', animacaoScroll);

