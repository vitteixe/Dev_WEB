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

const menuFixed = document.querySelector('#h-fixed');
const fixedNav = document.querySelector('#fixed-nav');
const btnFixed =document.getElementById('fixed-btn');

function toggleFixedMenu(event){

    if(event.type ==='touchstart') event.preventDefault()

    
    menuFixed.classList.toggle('active-menu');
    fixedNav.classList.toggle('active');

}

btnFixed.addEventListener('click', toggleFixedMenu);
btnFixed.addEventListener('touchstart', toggleFixedMenu);


//////////////////////////////////////////////////////////////


const positions =  setInterval(function () {
    
    const positionY = header.getBoundingClientRect().y*(-1);
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
    
    if(menuFixed.classList.contains('active')){
        fixedNav.classList.add('col');
    }
    
    function unloadScrollBars(){
        document.documentElement.overflow = 'hidden';
        document.body.scroll = 'no';
    }

    if(menuFixed.classList.contains('ative-menu')){
        unloadScrollBars()
    }

})