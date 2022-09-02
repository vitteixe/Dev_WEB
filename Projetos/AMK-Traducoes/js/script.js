const btn = document.querySelector('#btn-mobile');

toggleMenu = (event) => {

    if(event.type === 'touchstart') event.preventDefault();

    const nav = document.querySelector('nav');
    
    nav.classList.toggle('active');

}

btn.addEventListener('click', toggleMenu);
btn.addEventListener('touchstart', toggleMenu);

const dataAnimated = document.querySelectorAll('[data-animated]')
const classAnimated = 'animate';

scrollAnimate = () =>{
    
    const windowTop = window.pageYOffset + ((window.innerHeight) * 3 / 4);
    
    dataAnimated.forEach(function(element){

        if(windowTop > element.offsetTop){
            element.classList.add(classAnimated);
        } else{
            element.classList.remove(classAnimated);
        }

    })

    console.log(windowTop);

}

window.addEventListener('scroll', scrollAnimate);