const menuFlex = document.querySelector("#btn-menu");

function toggleMenu(){
    const nav = document.querySelector("nav");
    nav.classList.toggle("active");
}

if(document.body.contains(menuFlex)){
    menuFlex.addEventListener("click", toggleMenu);
}