const btnMobile = document.getElementById('btn-mobile');
const header = document.querySelector('header');

function toggleMenu(event){
    if(event.type ==='touchstart') event.preventDefault()

    header.classList.toggle('active');

    const nav = document.getElementById('nav');
    nav.classList.add('active');
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);


//////////////////////////////////////////////////////////////


const positions =  setInterval(function () {
    
    const positionY = header.getBoundingClientRect().y*(-1);
    const menuFixed = document.querySelector('#h-fixed');

    width = window.innerWidth;  

    if(width <= 979){
        
        if(positionY >= 380){
            menuFixed.classList.add('active');
        }else{
            menuFixed.classList.remove('active');
        }
        
    } else if(width <= 991){

        if(positionY >= 555){
            menuFixed.classList.add('active');
        }else{
            menuFixed.classList.remove('active');
        }

    } else{

        if(positionY >= 804){
            menuFixed.classList.add('active');
        }else{
            menuFixed.classList.remove('active');
        }

    }

})