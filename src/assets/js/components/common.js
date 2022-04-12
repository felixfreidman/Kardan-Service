const windowLocation = window.location.href;
console.log(windowLocation);
if (!windowLocation.includes("privacy")) {
  const darkLayer = document.querySelector(".dark-layer");
  const applyBtns = document.querySelectorAll(".apply-btn");
  const closeForm = document.getElementById("closeForm");
  const applyFormScreen = document.getElementById("applyForm");
  const burgerMenu = document.querySelector(".mobile-header__burger-menu");
  const mobileMenu = document.querySelector(".mobile-menu");
  const allFAQs = document.querySelectorAll(".faq-block");
  const mobileNavigation = document.getElementById("mobileNavigation");
  const allLinks = mobileNavigation.querySelectorAll(".navigation-link");

  applyBtns.forEach((button) => {
    button.addEventListener("click", () => {
      darkLayer.classList.toggle("js--hidden");
    });
  });

  closeForm.addEventListener("click", () => {
    darkLayer.classList.toggle("js--hidden");
  });

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

  $(document).ready(function () {
    $("#userPhone").inputmask();
  });

  allFAQs.forEach((faq) => {
    faq.addEventListener("click", () => {
      faq.classList.toggle("faq-block--active");
    });
  });
  const swiper = new Swiper("#greetingSwiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    effect: "cube",
  });
  // window.onscroll = function () {
  //   stickTheMenu();
  //   unStickTheMenu();
  //   activateTheListPoints();
  // };

  // const sectionList = document.getElementById("sectionList");
  // const sectionMenu = document.getElementById("sectionMenu");
  // const sectionAbilities = document.getElementById("toOffer");
  // // MENU POINTS
  // const firstMenuPoint = document.getElementById("firstMenuPoint");
  // const secondMenuPoint = document.getElementById("secondMenuPoint");
  // const thirdMenuPoint = document.getElementById("thirdMenuPoint");
  // const fourthMenuPoint = document.getElementById("fourthMenuPoint");
  // const fifthMenuPoint = document.getElementById("fifthMenuPoint");
  // // LIST POINTS
  // const firstListPoint = document.getElementById("firstListPoint");
  // const secondListPoint = document.getElementById("secondListPoint");
  // const thirdListPoint = document.getElementById("thirdListPoint");
  // const fourthListPoint = document.getElementById("fourthListPoint");
  // const fifthListPoint = document.getElementById("fifthListPoint");
  // let sectionListOffset = sectionList.offsetTop;
  // const sectionAbilitiesOffset = sectionAbilities.offsetTop;
  // // MENU POINTS OFFSETS
  // const firstMenuPointOffset = firstMenuPoint.offsetTop;
  // const secondMenuPointOffset = secondMenuPoint.offsetTop;
  // const thirdMenuPointOffset = thirdMenuPoint.offsetTop;
  // const fourthMenuPointOffset = fourthMenuPoint.offsetTop;
  // const fifthMenuPointOffset = fifthMenuPoint.offsetTop;

  // function stickTheMenu() {
  //   if (window.pageYOffset >= sectionListOffset) {
  //     sectionList.classList.add("sticky");
  //     sectionMenu.classList.add("menuPosition");
  //   } else {
  //     sectionList.classList.remove("sticky");
  //     sectionMenu.classList.remove("menuPosition");
  //   }
  // }

  // function unStickTheMenu() {
  //   if (window.pageYOffset > sectionAbilitiesOffset - 350) {
  //     sectionList.classList.remove("sticky");
  //     sectionMenu.classList.remove("menuPosition");
  //   }
  // }

  // function activateTheListPoints() {
  //   if (window.pageYOffset >= firstMenuPointOffset - 100) {
  //     firstListPoint.classList.add("list-item--active");
  //   } else if (window.pageYOffset <= fourthMenuPointOffset) {
  //     firstListPoint.classList.remove("list-item--active");
  //   }
  //   if (window.pageYOffset >= fifthMenuPointOffset - 100) {
  //     fifthListPoint.classList.add("list-item--active");
  //   } else if (window.pageYOffset <= fifthMenuPointOffset) {
  //     fifthListPoint.classList.remove("list-item--active");
  //   }
  //   if (window.pageYOffset >= secondMenuPointOffset - 100) {
  //     secondListPoint.classList.add("list-item--active");
  //   } else if (window.pageYOffset <= fourthMenuPointOffset) {
  //     secondListPoint.classList.remove("list-item--active");
  //   }
  //   if (window.pageYOffset >= thirdMenuPointOffset - 100) {
  //     thirdListPoint.classList.add("list-item--active");
  //   } else if (window.pageYOffset <= fourthMenuPointOffset) {
  //     thirdListPoint.classList.remove("list-item--active");
  //   }
  //   if (window.pageYOffset >= fourthMenuPointOffset - 100) {
  //     fourthListPoint.classList.add("list-item--active");
  //   } else if (window.pageYOffset <= fourthMenuPointOffset) {
  //     fourthListPoint.classList.remove("list-item--active");
  //   }
  // }

  // function diactivateAllListPoints() {
  //   const listPoinstArray = document.querySelectorAll(".list-item");
  //   console.log(listPoinstArray);
  //   listPoinstArray.forEach((point) => {
  //     point.classList.remove("list-item--active");
  //   });
  // }
} else {
  // Поменять стили header, если на белой странице "Конфиденциальность"
  const darkLayer = document.querySelector(".dark-layer");
  const applyBtns = document.querySelectorAll(".apply-btn");
  const closeForm = document.getElementById("closeForm");
  const applyFormScreen = document.getElementById("applyForm");
  const burgerMenu = document.querySelector(".mobile-header__burger-menu");
  const mobileMenu = document.querySelector(".mobile-menu");
  const header = document.querySelector(".header");
  applyBtns.forEach((button) => {
    button.addEventListener("click", () => {
      darkLayer.classList.toggle("js--hidden");
    });
  });

  closeForm.addEventListener("click", () => {
    darkLayer.classList.toggle("js--hidden");
  });

  burgerMenu.addEventListener("click", () => {
    burgerMenu.classList.toggle("mobile-header__burger-menu--active");
    mobileMenu.classList.toggle("mobile-menu--active");
    document.querySelector("body").classList.toggle("disable-body");
  });
  $(document).ready(function () {
    $("#userPhone").inputmask();
  });
  header.classList.add("header--dark");
}
