AOS.init();

const darkLayer = document.querySelector(".dark-layer");
const applyBtns = document.querySelectorAll(".modal-button");
const closeForm = document.getElementById("closeForm");

applyBtns.forEach(button => {
  button.addEventListener("click", () => {
    darkLayer.classList.toggle("js--hidden");
  });
});


closeForm.addEventListener("click", () => {
  darkLayer.classList.toggle("js--hidden");
});

$(document).ready(function () {
  if (document.getElementById('userPhone')) {
    $("#userPhone").inputmask();
  }
});

window.onclick = function (event) {
  if (event.target == darkLayer) {
    darkLayer.classList.toggle("js--hidden");
  }
};

if (window.location.href.includes('shop') || window.location.href.includes('auto')) {
  const cards = document.querySelectorAll('.container-card');
  cards.forEach(card => {
    let href = card.getAttribute('data-href');
    card.addEventListener('click', (event) => {
      if (!event.target.classList.contains('container-card__button')) {
        window.location.href = href;
      }
    });

  })
}

let bookCounter = document.querySelector('.book-counter').textContent;
if (localStorage.getObj("orderCart")) {
  const array = localStorage.getObj("orderCart").length;

  bookCounter = parseInt(bookCounter) + array;
  document.querySelector('.book-counter').textContent = bookCounter;
}



const burgerMenu = document.querySelector(".mobile-header__burger-menu");
const mobileMenu = document.querySelector(".mobile-menu");
const mobileNavigation = document.getElementById("mobileNavigation");
const allLinks = mobileNavigation.querySelectorAll(".mobileLink");

burgerMenu.addEventListener("click", () => {
  burgerMenu.classList.toggle("mobile-header__burger-menu--active");
  mobileMenu.classList.toggle("mobile-menu--active");
  document.querySelector("body").classList.toggle("disable-body");
});

allLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burgerMenu.classList.toggle("mobile-header__burger-menu--active");
    mobileMenu.classList.toggle("mobile-menu--active");
    document.querySelector("body").classList.toggle("disable-body");
  });
});

if (window.location.href.includes('rotor')) {
  let phone = document.querySelector('.phone-value');
  phone.textContent = '7 (3952) 66‒77‒79';
  phone.href = 'tel:+73952667779';
  let footer_phone = document.querySelector('.contacts').querySelector('a');
  footer_phone.textContent = '7 (3952) 66‒77‒79';
  footer_phone.href = 'tel:+73952667779';
}