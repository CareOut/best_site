// menu Burger


const burgerIcon = document.querySelector(".burger__img");
const burgerMenu = document.querySelector(".burger");
const burgerCross = document.querySelector(".cross__img");

burgerIcon.addEventListener("click", () => {
  burgerMenu.style.display = "block";
});

burgerCross.addEventListener("click", () => {
  burgerMenu.style.display = "none";
});