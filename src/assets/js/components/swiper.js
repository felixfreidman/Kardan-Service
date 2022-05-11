const swiper = new Swiper('#workerSwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 400,
    spaceBetween: 34,
    effect: 'cards',
    slidesPerView: '4',
    swipeHandler: '.swiper-wrapper',
});
const swiperImages = document.querySelectorAll(".bathroom-preview");
let imgLinkArray = new Array();
let returnValue = 0;
swiperImages.forEach(image => {
    const imageSrc = image.src.replace("http://localhost:3000", ".");
    var returnValue = `<img class="swiper-preview swiper-pagination-bullet" src=${imageSrc}>`;
    imgLinkArray.push(returnValue)
})

const fancySwiper = new Swiper('#fancySwiper', {
    direction: 'horizontal',
    loop: true,
    speed: 500,
    spaceBetween: 34,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    slidesPerView: '1',
    swipeHandler: '.swiper-wrapper',
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index) {
            return imgLinkArray[index];
        },
    }
});

const cafeSwiper = new Swiper('#cafeSwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    speed: 400,
    spaceBetween: 24,
    effect: 'cards',
    slidesPerView: '2',
    // swipeHandler: '.swiper-wrapper',
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const actionSwiper = new Swiper('#actionSwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed: 400,
    spaceBetween: 24,
    effect: 'cards',
    slidesPerView: '2',

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const updatedswiperImages = document.querySelectorAll(".preview");
let updatedimgLinkArray = new Array();
let updatedreturnValue = 0;
updatedswiperImages.forEach(slide => {
    let image = slide.querySelector('img');
    console.log(image);
    let imageSrc = image.src.replace("http://localhost:3000", ".");
    var updatedreturnValue = `<img class="swiper-preview swiper-pagination-bullet" src=${imageSrc}>`;
    updatedimgLinkArray.push(updatedreturnValue)
})

const watchSwiper = new Swiper('#watchSwiper', {
    direction: 'horizontal',
    loop: false,
    speed: 500,
    spaceBetween: 54,
    effect: 'cards',
    slidesPerView: '1',
    swipeHandler: '.swiper-wrapper',
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index) {
            return updatedimgLinkArray[index];
        },
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


const greetingSwiper = new Swiper("#greetingSwiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay: true,

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