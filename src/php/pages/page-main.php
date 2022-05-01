<?php /* Template Name: Главная страница */
get_header(); ?>
<main class="main">
    <section class="section section--greeting">
        <div class="swiper swiper-greeting" id="greetingSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-container container--kardan">
                        <div class="header">Ремонт и изготовление карданных валов</div>
                        <div class="subheader">Наши мастера выявят все дефекты и устранят их</div>
                        <div class="apply-btn">Оставить заявку</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--rotor">
                        <div class="header">Балансировка и обслуживание роторов</div>
                        <div class="subheader">Наши мастера выявят все дефекты и устранят их</div>
                        <div class="apply-btn">Оставить заявку</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--turbo">
                        <div class="header">Ремонт и обслуживание турбин</div>
                        <div class="subheader">Наши мастера выявят все дефекты и устранят их</div>
                        <div class="apply-btn">Оставить заявку</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--shop">
                        <div class="header">Наш интернет-магазин</div>
                        <div class="subheader">Узнайте, какие услуги актуальные и сколько они стоят</div>
                        <div class="apply-btn">Перейти</div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"> </div>
            <div class="swiper-navigation">
                <div class="swiper-button-prev"> </div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="section section--menu" id="services">
        <div class="button-container">
            <div class="button-toggler button-toggler--active" id="serviceButton">услуги</div>
            <div class="button-toggler" id="shopButton">интернет-магазин</div>
        </div>
        <div class="menu-container">
            <div class="container container--show">
                <div class="container-navigation">
                    <div class="content-toggler content-toggler--active" id="kardan">
                        <div class="logo"> <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/content/cardan.svg'?>"
                                alt=""></div>
                        <div class="caption">Ремонт</div>
                    </div>
                    <div class="content-toggler" id="rotor">
                        <div class="logo"> <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/content/rotor.svg'?>"
                                alt=""></div>
                        <div class="caption">Балансировка роторов</div>
                    </div>
                    <div class="content-toggler" id="treat">
                        <div class="logo treat"> <img
                                src="<?php echo get_template_directory_uri() . '/assets/images/content/treat.svg'?>"
                                alt=""></div>
                        <div class="caption">Механическая обработка</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--screens">
        <div class="adaptive-screen screen-active" id="kardan-screen">
            <div class="adaptive-screen__container">
                <a href="https://xn--38-9kc6cilh.xn--p1ai/" class="link-half">
                    <div class="adaptive-screen__header">Ремонт карданов</div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/content/main_bg.jpg '?>" alt="">
                </a>
                <a href="https://xn--38-9kc6cilh.xn--p1ai/" class="link-half">
                    <div class="adaptive-screen__header">Ремонт турбин</div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/content/main_bg.jpg '?>" alt="">
                </a>
            </div>
        </div>
        <div class="adaptive-screen screen-hidden" id="rotor-screen">
            <div class="adaptive-screen__container">
                <a href="https://xn--38-9kc6cilh.xn--p1ai/" class="link-big">
                    <div class="adaptive-screen__header">Балансировка роторов</div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/content/main_bg.jpg '?>" alt="">
                </a>
            </div>
        </div>
        <div class="adaptive-screen screen-hidden" id="treat-screen">
            <div class="adaptive-screen__container">
                <a href="https://xn--38-9kc6cilh.xn--p1ai/" class="link-big">
                    <div class="adaptive-screen__header">Механическая обработка</div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/content/main_bg.jpg '?>" alt="">
                </a>
            </div>
        </div>
        <div class="adaptive-screen screen-hidden" id="shop-screen">
            <div class="container">
                <div class="shop-container"> <a class="shop-card" href="shop-item"
                        style="background: linear-gradient( 360deg, rgba(26, 47, 68, 0.9) 0%, rgba(26, 47, 68, 0) 100%), url(./assets/images/content/main_bg.jpg)">
                        <div class="shop-header">Замена карданого вала</div>
                        <div class="shop-time">24 часа</div>
                    </a><a class="shop-card" href="shop-item"
                        style="background: linear-gradient( 360deg, rgba(26, 47, 68, 0.9) 0%, rgba(26, 47, 68, 0) 100%), url(./assets/images/content/main_bg.jpg)">
                        <div class="shop-header">Замена масла</div>
                        <div class="shop-time">1 час</div>
                    </a><a class="shop-card" href="shop-item"
                        style="background: linear-gradient( 360deg, rgba(26, 47, 68, 0.9) 0%, rgba(26, 47, 68, 0) 100%), url(./assets/images/content/main_bg.jpg)">
                        <div class="shop-header">Замена турбины</div>
                        <div class="shop-time">96 часов</div>
                    </a><a class="shop-card" href="shop-item"
                        style="background: linear-gradient( 360deg, rgba(26, 47, 68, 0.9) 0%, rgba(26, 47, 68, 0) 100%), url(./assets/images/content/main_bg.jpg)">
                        <div class="shop-header">Механическая обработка</div>
                        <div class="shop-time">28 часов</div>
                    </a></div><a class="shop-button" href="shop.html">Больше товаров</a>
            </div>
        </div>
    </section>
    <section class="section sectin--form"> </section>
</main>
<script>
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('map', {
            center: [56.81122355, 60.72763708],
            zoom: 14
        }),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            balloonContent: 'г. Екатеринбург, ул. Летняя, 20',
            iconCaption: 'г. Екатеринбург, ул. Летняя, 20',
        }, {
            iconLayout: 'default#image',
            iconImageHref: "<?php echo get_template_directory_uri() . '/assets/images/content/logo.svg'?>",
            iconImageSize: [30, 42],
            iconImageOffset: [-5, -38],
        })

    myMap.geoObjects
        .add(myPlacemark);
}
</script>
<?php
get_footer();