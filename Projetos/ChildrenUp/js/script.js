const menuFlex = document.querySelector("#btn-menu");

function toggleMenu(){
    const nav = document.querySelector("nav");
    nav.classList.toggle("active");
}

if(document.body.contains(menuFlex)){
    menuFlex.addEventListener("click", toggleMenu);
}


const btnWpp = document.querySelector("#Whatsapp");

btnWpp.addEventListener("click", function(){
    window.open("https://wa.me/32471369451?text=Bonjour,%20je%20souhaite%20planifierr%20une%20consultation!")
})