const swiper = new Swiper("#greetingSwiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",

    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const menuTogglers = document.querySelectorAll(".content-toggler");
const screens = document.querySelectorAll(".adaptive-screen");
// const serviceButton = document.getElementById("serviceButton");
// const shopButton = document.getElementById("shopButton");

const menuButtons = document.querySelectorAll(".button-toggler");
menuTogglers.forEach(toggler => {
  toggler.addEventListener("click", () => {
    menuTogglers.forEach(button => {
      if (button.classList.contains("content-toggler--active")) {
        button.classList.remove("content-toggler--active");
      }
    })
    toggler.classList.add("content-toggler--active");
    showScreen(toggler.id)
    menuButtons.forEach(button => {
      if (button.classList.contains("button-toggler--active")) {

        button.classList.remove("button-toggler--active");
      }
      const buttonID = button.id;
      if (buttonID.includes('service')) document.getElementById(buttonID).classList.add("button-toggler--active")

    })
  })
})


function showScreen(togglerID) {
  screens.forEach(screen => {
    if (screen.classList.contains("screen-active")) {
      screen.classList.remove("screen-active");
      screen.classList.add('screen-hidden');
    }
    const screenID = screen.id;
    if (screenID.includes(togglerID)) {
      screen.classList.add("screen-active");
      screen.classList.remove('screen-hidden');
    }
  })
}

menuButtons.forEach(button => {
  button.addEventListener("click", () => {
    console.log(('clicked'));
    menuButtons.forEach(specialButton => {
      if (specialButton.classList.contains("button-toggler--active")) {
        console.log("changed")
        specialButton.classList.remove("button-toggler--active");
      }
    })
    if (!button.classList.contains("button-toggler--active")) {
      button.classList.add("button-toggler--active");
    }
    if (button.id.includes("service")) {
      showScreen("kardan");
      menuTogglers.forEach(button => {
        if (button.classList.contains("content-toggler--active")) {
          button.classList.remove("content-toggler--active");
        }
      })
      document.getElementById("kardan").classList.add('content-toggler--active')
    } else {
      showScreen("shop");
    }
  })
})

if (window.location.href.includes("contact")) {
  ymaps.ready(init);

  function init() {
    var myMap = new ymaps.Map('map', {
      center: [56.81122355, 60.72763708],
      zoom: 14
    }),

      myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        balloonContent: 'г. Иркутск, ул. Сурнова, 20',
        iconCaption: 'г. Иркутск, ул. Сурнова, 20',
      }, {
        iconLayout: 'default#image',
        iconImageHref: "./assets/images/content/logo_custom.svg",
        iconImageSize: [30, 42],
        iconImageOffset: [-5, -38],
      })

    myMap.geoObjects
      .add(myPlacemark);
  }
}


