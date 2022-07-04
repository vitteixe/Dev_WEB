//Menu
const btnMobile = document.querySelector("#btn-mobile");
const header = document.querySelector("header");
const nav = document.querySelector("#nav");

function toggleMenu(event) {
  if (event.type === "touchstart") event.preventDefault();

  header.classList.toggle("active");
  nav.classList.toggle("active");
}

btnMobile.addEventListener("click", toggleMenu);
btnMobile.addEventListener("touchstart", toggleMenu);

//////////////////////////////////////////////////////////////

const menuFixed = document.querySelector("#h-fixed");
const fixedNav = document.querySelector("#fixed-nav");
const btnFixed = document.querySelector("#fixed-btn");

function toggleFixedMenu(event) {
  if (event.type === "touchstart") event.preventDefault();

  menuFixed.classList.toggle("active-menu");
  fixedNav.classList.toggle("active");
}

btnFixed.addEventListener("click", toggleFixedMenu);
btnFixed.addEventListener("touchstart", toggleFixedMenu);

//////////////////////////////////////////////////////////////
const html = document.querySelector("html");
const positions = setInterval(function () {
  const positionY = header.getBoundingClientRect().y * -1;
  const width = window.innerWidth;
  const active = nav.classList.contains("active");

  if (width <= 979 && active) {
    if (positionY >= 811) {
      menuFixed.classList.add("active");
    } else {
      menuFixed.classList.remove("active");
    }
  } else {
    if (width <= 979) {
      if (positionY >= 677) {
        menuFixed.classList.add("active");
      } else {
        menuFixed.classList.remove("active");
      }
    } else if (width <= 991) {
      if (positionY >= 681) {
        menuFixed.classList.add("active");
      } else {
        menuFixed.classList.remove("active");
      }
    } else {
      if (positionY >= 760) {
        menuFixed.classList.add("active");
      } else {
        menuFixed.classList.remove("active");
      }
    }
  }

  if (menuFixed.classList.contains("active-menu")) {
    html.classList.add("menu-active");
  } else {
    html.classList.remove("menu-active");
  }
});

//////////////////////////////////////////////////////////////
//animated
const target = document.querySelectorAll("[data-animated]");
const animationClass = "animate";

const height = (window.innerHeight * 3) / 4;

function animeScroll() {
  const windowTop = window.pageYOffset + height;

  target.forEach(function (element) {
    if (windowTop > element.offsetTop) {
      element.classList.add(animationClass);
    } else {
      element.classList.remove(animationClass);
    }
  });
}

animeScroll();

if (target.length) {
  window.addEventListener("scroll", function () {
    animeScroll();
  });
}

//////////////////////////////////////////////////////////////

const menuItens = document.querySelectorAll('#menu a[href^="#"]');

menuItens.forEach((item) => {
  item.addEventListener("click", scrollClick),
  item.addEventListener("click", closeMenu)
});

function getScrollTopByHref(link) {
  const id = link.getAttribute("href");
  console.log(id)
  return document.querySelector(id).offsetTop;
}

function scrollClick(event) {
  event.preventDefault(); //prevenção na url

  const to = getScrollTopByHref(event.target) - 85;

  scrollToPosition(to);
}

function scrollToPosition(to) {
  window.scroll({
    top: to,
    behavior: "smooth", //scroll suave
  });
}

function closeMenu (){
  if (menuFixed.classList.contains("active-menu")){
    menuFixed.classList.remove("active-menu")
  }
}


//////////////////////////////////////////////////////////////
