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

if (window.location.href.includes('shop')) {
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