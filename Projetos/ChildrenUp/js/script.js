const btnM = document.querySelector("#btn-mobile");

function toggleMenu(){
    const nav = document.querySelector("nav");
    nav.classList.toggle("active");
}

btnM.addEventListener("click", toggleMenu)