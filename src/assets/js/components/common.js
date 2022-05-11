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

// $(document).ready(function () {
//     $("#userPhone").inputmask();
// });

window.onclick = function (event) {
  if (event.target == darkLayer) {
    darkLayer.classList.toggle("js--hidden");
  }
};