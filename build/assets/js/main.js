"use strict";

// AJAX-запрос для отправки сообщений на почту, которая указана в админке сайта
$(function () {
  $("#applyForm").on("submit", function (e) {
    e.preventDefault();
    var name = $("#userName").val();
    var phone = $("#userPhone").val();
    var company = $("#userCompany").val();
    var area = $("#userArea").val();
    $.ajax({
      type: "post",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "ajax_form",
        name: name,
        phone: phone,
        company: company,
        area: area
      },
      success: function success(response) {
        $(".dark-layer").html(response);
        closeAppliedForm();
      }
    });
  });
}); // Проверяем, что все поля важные заполнены

$(".form-button").on("click", function () {
  inputAuthorization();
}); // Так как окно после отправки я генерирую сам, мне нужно его закрывать, поэтому функция вызывается, когда только появляется окно

function closeAppliedForm() {
  var closeAppliedForm = document.getElementById("closeAppliedForm");
  var closeAppliedFormButton = document.getElementById("closeAppliedFormButton");
  closeAppliedForm.addEventListener("click", function () {
    darkLayer.classList.toggle("js--hidden");
  });
  closeAppliedFormButton.addEventListener("click", function () {
    darkLayer.classList.toggle("js--hidden");
  });
} // Сама функция проверки полей и добавления дополнительных свойств полю


function inputAuthorization() {
  var inputsArray = document.querySelectorAll(".form-input");
  inputsArray.forEach(function (input) {
    if (!input.value) {
      var span = addWarningEmptySpan();
      input.classList.add("form-input--warning");
      var inputID = input.id;
      var inputLabel = document.querySelector("[for=".concat(inputID, "]"));
      inputLabel.appendChild(span);
    }
  });
} // Не хотел перегружать функция проверки и прочее, поэтому создание отдельного спана вынес отдельно


function addWarningEmptySpan() {
  var warningEmptySpan = document.createElement("span");
  warningEmptySpan.classList.add("empty--input");
  return warningEmptySpan;
} // Как только пользователь решился ввести данные, если было предупреждение я удаляю предупреждения всякие


function deleteWarningSpans() {
  var inputsArray = document.querySelectorAll(".form-input");
  inputsArray.forEach(function (input) {
    input.addEventListener("input", function () {
      var inputID = input.id;
      var inputLabel = document.querySelector("[for=".concat(inputID, "]"));

      if (inputLabel.querySelector(".empty--input")) {
        var certainSpan = inputLabel.querySelector(".empty--input");
        certainSpan.remove();
        input.classList.remove("form-input--warning");
      }
    });
  });
}

deleteWarningSpans();
var swiper = new Swiper("#greetingSwiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});
var menuTogglers = document.querySelectorAll(".content-toggler");
var screens = document.querySelectorAll(".adaptive-screen"); // const serviceButton = document.getElementById("serviceButton");
// const shopButton = document.getElementById("shopButton");

var menuButtons = document.querySelectorAll(".button-toggler");
menuTogglers.forEach(function (toggler) {
  toggler.addEventListener("click", function () {
    menuTogglers.forEach(function (button) {
      if (button.classList.contains("content-toggler--active")) {
        button.classList.remove("content-toggler--active");
      }
    });
    toggler.classList.add("content-toggler--active");
    showScreen(toggler.id);
  });
});

function showScreen(togglerID) {
  screens.forEach(function (screen) {
    if (screen.classList.contains("screen-active")) {
      screen.classList.remove("screen-active");
      screen.classList.add('screen-hidden');
    }

    var screenID = screen.id;

    if (screenID.includes(togglerID)) {
      screen.classList.add("screen-active");
      screen.classList.remove('screen-hidden');
    }
  });
}

menuButtons.forEach(function (button) {
  button.addEventListener("click", function () {
    console.log('clicked');
    menuButtons.forEach(function (specialButton) {
      if (specialButton.classList.contains("button-toggler--active")) {
        console.log("changed");
        specialButton.classList.remove("button-toggler--active");
      }
    });

    if (!button.classList.contains("button-toggler--active")) {
      button.classList.add("button-toggler--active");
    }

    if (button.id.includes("service")) {
      showScreen("kardan");
      menuTogglers.forEach(function (button) {
        if (button.classList.contains("content-toggler--active")) {
          button.classList.remove("content-toggler--active");
        }
      });
      document.getElementById("kardan").classList.add('content-toggler--active');
    } else {
      showScreen("shop");
    }
  });
});

if (window.location.href.includes("contact")) {
  var init = function init() {
    var myMap = new ymaps.Map('map', {
      center: [56.81122355, 60.72763708],
      zoom: 14
    }),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      balloonContent: 'г. Иркутск, ул. Сурнова, 20',
      iconCaption: 'г. Иркутск, ул. Сурнова, 20'
    }, {
      iconLayout: 'default#image',
      iconImageHref: "./assets/images/content/logo_custom.svg",
      iconImageSize: [30, 42],
      iconImageOffset: [-5, -38]
    });
    myMap.geoObjects.add(myPlacemark);
  };

  ymaps.ready(init);
}