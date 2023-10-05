//Адаптивное меню
const iconMenu = document.querySelector(".header__hamburger");
const main = document.querySelector(".main");
const headerMenu = document.querySelector(".header__menu");
const header=document.querySelector(".header");
iconMenu.addEventListener("click", (e) => {
  iconMenu.classList.toggle("_open");
  main.classList.toggle("_lock");
  headerMenu.classList.toggle("_open");
});
//Слайдер
const swiper = new Swiper(".swiper", {
  navigation: {
    nextEl: ".swiper-next-button",
    prevEl: ".swiper-prev-button",
  },
  effect: "fade",
  loop: "infinite",
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
});


