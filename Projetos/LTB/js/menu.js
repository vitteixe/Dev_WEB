const btnMobile = document.getElementById('btn-mobile');
const header = document.querySelector('header');
const nav = document.getElementById('nav');

function toggleMenu(event){
    if(event.type ==='touchstart') event.preventDefault()

    header.classList.toggle('active');
    nav.classList.toggle('active');
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

//////////////////////////////////////////////////////////////

const btnFixed =document.getElementById('fixed-btn');
const fixedNav = document.getElementById('fixed-nav');
const hFixed = document.getElementById('h-fixed');

function toggleFixedMenu(event){

    if(event.type ==='touchstart') event.preventDefault()

    hFixed.classList.toggle('active-menu');

    fixedNav.classList.toggle('active');
    
}

btnFixed.addEventListener('click', toggleFixedMenu);
btnFixed.addEventListener('touchstart', toggleFixedMenu);

//////////////////////////////////////////////////////////////


const positions =  setInterval(function () {
    
    const positionY = header.getBoundingClientRect().y*(-1);
    const menuFixed = document.querySelector('#h-fixed');
    const width = window.innerWidth;  
    
    const active = nav.classList.contains('active');

    

    if(width <= 979 && active){

        if(positionY >= 587){
            menuFixed.classList.add('active');
        }else{
            menuFixed.classList.remove('active');
        }

    } else {

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

    }
    

    

})