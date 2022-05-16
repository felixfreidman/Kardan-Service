<?php /* Template Name: Главная страница */
get_header(); ?>
<main class="main" id="toMain">
    <div class="main--greeting">
        <div class="swiper swiper-greeting" id="greetingSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-container container--kardan">
                        <div class="header">ПРОДАЖА И ВОССТАНОВЛЕНИЕ КАРДАННЫХ ВАЛОВ</div>
                        <div class="subheader">ОТРЕМОНТИРУЕМ ВАШ КАРДАННЫЙ ВАЛ ИЛИ ПРЕДЛОЖИМ К ПОКУПКЕ ВОССТАНОВЛЕННЫЙ
                            ВАРИАНТ</div>
                        <div class="special-row">
                            <a class="apply-btn special-button-updated" href="<?=home_url();?>/kardan">Купить
                                восстановленный</a>
                            <a class="apply-btn special-button-updated orange-button"
                                href="<?=home_url();?>/kardan">Отремонтировать
                                сломанный</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--turbo">
                        <div class="header">ПРОДАЖА И ВОССТАНОВЛЕНИЕ ТУРБОКОМПРЕССОРОВ</div>
                        <div class="subheader">ОТРЕМОНТИРУЕМ ВАШУ ТУРБИНУ ИЛИ ПРЕДЛОЖИМ К ПОКУПКЕ ВОССТАНОВЛЕННУЮ </div>
                        <div class="special-row">
                            <a class="apply-btn special-button-updated" href="<?=home_url();?>/turbo">Купить
                                восстановленную</a>
                            <a class="apply-btn special-button-updated orange-button"
                                href="<?=home_url();?>/turbo">Отремонтировать
                                сломанную</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--shop">
                        <div class="header">Наш интернет-магазин</div>
                        <div class="subheader">АКТУАЛЬНОЕ НАЛИЧИЕ ВОССТАНОВЛЕННЫХ КАРДАННЫХ ВАЛОВ И
                            ТУРБОКОМПРЕССОРОВ
                        </div>

                        <a class="apply-btn" href="<?=home_url();?>#shop">Перейти</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--rotor">
                        <div class="header">Балансировка и обслуживание роторов</div>
                        <div class="subheader">Наши мастера выявят все дефекты и устранят их</div>
                        <a class="apply-btn" href="<?=home_url();?>/rotor">Перейти</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-container container--treatment">
                        <div class="header">Механическая обработка</div>
                        <div class="subheader">Наши мастера выявят все дефекты и устранят их</div>
                        <a class="apply-btn" href="<?=home_url();?>/treatment">Узнать больше</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"> </div>
            <div class="swiper-navigation">
                <div class="swiper-button-prev"> </div>
                <div class="swiper-button-next" id="shop"></div>
            </div>
        </div>
    </div>
    <div class="main--shop shop-parent">
        <div class="shop-parent__subtitle">Интернет-магазин</div>
        <div class="row" id="services">
            <div class="container">
                <a class="shop-image shop-image--kardan" href='<?=home_url();?>/kardan-shop' data-aos="flip-left">
                </a>
                <a class="shop-image shop-image--turbo" href='<?=home_url();?>/turbo-shop' data-aos="flip-right">
                </a>
            </div>
        </div>
    </div>

    <div class="shop-parent__subtitle header--updated">Услуги</div>
    <div class="main--kardan kardan-parent">
        <div class="image-container"> <img
                src="https://ruskardan.ru/image/catalog/content/mercedes/sprinter/Sprinter_6_big.jpg" alt=""
                data-aos="flip-up">
            <div class="kardan-parent__badge-icon">
                <a href="<?=home_url();?>/kardan"><img
                        src="<?=get_template_directory_uri() . '/assets/images/content/badge.svg'?>" alt=""
                        data-aos="flip-down"></a>
            </div>
        </div>
        <div class="content-container">
            <div class="kardan-parent__subtitle">Ремонт карданных валов</div>
            <div class="kardan-parent__content">Компания ООО «Кардан Сервис» предлагает ремонт карданных валов для
                всех марок автомобилей, спецтехники и промышленного оборудования. Обращаясь к нам вы можете быть
                уверены в наивысшем качестве, профессионализме и заводских условиях ремонта</div>
            <div class="special-row">
                <a class="kardan-parent__button" href="<?=home_url();?>/kardan">Узнать больше</a>
                <div class="kardan-parent__button modal-button">Отправить заявку</div>
            </div>
        </div>
    </div>
    <div class="main--benefits benefits-parent">
        <div class="content-container">
            <div class="benefits-parent__subtitle">Ремонт турбокомпрессоров</div>
            <div class="benefits-parent__content">Восстановим ваш турбокомпрессор в заводских условиях с гарантией
                до двух лет.</div>
            <div class="benefits-parent__list">
                <div class="benefits-parent__item">
                    <div class="benefits-parent__counter">1</div>
                    <div class="benefits-parent__value">Профессиональная диагностика и настройка турбокомпрессоров
                        на стендах CIMAT</div>
                </div>
                <div class="benefits-parent__item">
                    <div class="benefits-parent__counter">2</div>
                    <div class="benefits-parent__value">Используем исключительно оригинальные запчасти лучшего
                        качества</div>
                </div>
                <div class="benefits-parent__item">
                    <div class="benefits-parent__counter">3</div>
                    <div class="benefits-parent__value">Ремонтируем турбины любых марок автомобилей.</div>
                </div>
            </div>
            <div class="special-row">
                <a class="benefits-parent__button" href="<?=home_url();?>/turbo">Узнать больше</a>
                <div class="benefits-parent__button modal-button">Отправить заявку</div>
            </div>
        </div>
        <div class="images-container">
            <div class="image-container image-container--first" data-aos="fade-left"></div>
            <div class="image-container image-container--second" data-aos="fade-right"></div>
            <div class="benefits-parent__badge-icon"> <a href="<?=home_url();?>/turbo"><img
                        src="<?=get_template_directory_uri() . '/assets/images/content/badge-turbo.svg'?>" alt=""
                        data-aos="flip-down"></a></div>
        </div>
    </div>
    <div class="main--form form-parent">
        <form class="form-container" data-aos="flip-down" id="miniApplyForm">
            <div class=" container">
                <div class="form-parent__title">Перезвоним за 2 минуты</div>
                <div class="form-parent__subtitle"> Наш менеджер готов перезвонить вам в течение 2-ух минут, помочь
                    с подбором или принять в ремонт вашу запчасть</div>
                <div class="form-parent__bar"></div>
            </div>
            <div class="form-apply">
                <div class="special-row" style="width: 70%"><label class="form-parent__label"
                        for="userNameMini">Имя<input id="userNameMini" class="form-parent__input"
                            type="text"></label><label class="form-parent__label" for="userPhoneMini">Телефон<input
                            id="userPhoneMini" class="form-parent__input" type="text"></label>
                </div><button class="form-parent__button miniButton" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div class="main--kardan kardan-parent" id="services">
        <div class="image-container"> <img src="https://st18.stpulscen.ru/images/product/331/501/780_big.jpg" alt=""
                data-aos="flip-up">
        </div>
        <div class="content-container">
            <div class="kardan-parent__subtitle">Балансировка роторов</div>
            <div class="kardan-parent__content">Если у Вас нет своего балансировочного оборудования и специалистов,
                но
                стоят задачи балансировки отдельных деталей или больших партий однотипных изделий, мы готовы
                квалифицировано проконсультировать и решить задачи балансировки.</div>
            <div class="special-row">
                <a class="kardan-parent__button" href="<?=home_url();?>/rotor">Узнать больше</a>
                <div class="kardan-parent__button modal-button">Отправить заявку</div>
            </div>
        </div>
    </div>
    <div class="main--benefits benefits-parent last-block" style="margin-bottom: 150px;">
        <div class="content-container">
            <div class="benefits-parent__subtitle">Механическая обработка</div>
            <div class="benefits-parent__content">
                Механическая обработка — обработка изделий из стали и других материалов с помощью механического
                воздействия с применением резца, сверла, фрезы и другого режущего инструмента. Сам процесс обработки
                осуществляется на металлорежущих станках, в установленном порядке согласно технологическому
                процессу.
            </div>
            <div class="benefits-parent__list">
                <div class="benefits-parent__item">
                    <div class="benefits-parent__counter">1</div>
                    <div class="benefits-parent__value">Фрезерная, токарная, зуборезная, электроэрозионная
                        обработка</div>
                </div>
                <div class="benefits-parent__item">
                    <div class="benefits-parent__counter">2</div>
                    <div class="benefits-parent__value">Термообработка ваших деталей</div>
                </div>
                <div class="benefits-parent__item">
                    <div class="benefits-parent__counter">3</div>
                    <div class="benefits-parent__value">Работаем с любыми деталями</div>
                </div>
            </div>
            <div class="special-row">
                <a class="benefits-parent__button" href="<?=home_url();?>/treatment">Узнать больше</a>
                <div class="benefits-parent__button modal-button">Отправить заявку</div>
            </div>
        </div>
        <div class="images-container">
            <div class="image-container image-container--first"
                style="background-image: url(https://www.d-servis.ru/upload/medialibrary/fd1/Obrabotka-metalla-na-tokarnom-stanke-s-CHPU-v-Penze_.jpg) !important;"
                data-aos="fade-left"></div>
            <div class="image-container image-container--second"
                style="background-image: url(https://www.d-servis.ru/upload/medialibrary/fd1/Obrabotka-metalla-na-tokarnom-stanke-s-CHPU-v-Penze_.jpg) !important;     background-position: 70% 0 !important;"
                data-aos="fade-right"></div>

        </div>
    </div>

    <!-- <div class="main--navigation navigation-parent">
        <div class="navigation-parent__title">/Что мы предлагаем?</div>
        <div class="navigation-parent__subtitle">Специалисты своего дела</div>
        <div class="navigation-parent__container">
            <div class="navigation-parent__image"> <img
                    src="https://www.d-servis.ru/upload/medialibrary/fd1/Obrabotka-metalla-na-tokarnom-stanke-s-CHPU-v-Penze_.jpg "
                    alt="" data-aos="flip-down">
            </div>
            <div class="navigation-parent__service">
                <div class="navigation-parent__counter">Балансировка роторов</div>
                <div class="navigation-parent__description">Осуществляем динамическую балансировку роторов
                </div><a class="navigation-parent__more" href="/rotor/"> </a>
            </div>
            <div class="navigation-parent__image"> <img
                    src="http://kardan.bezrealtora.ru/wp-content/themes/kardan/assets/images/content/kardany.jpg" alt=""
                    data-aos="flip-down"></div>
            <div class="navigation-parent__service">
                <div class="navigation-parent__counter">Механическая обработка</div>
                <div class="navigation-parent__description">Фрезерная, токарная, зуборезная, электроэрозионная
                    обработка, термообработка ваших деталей и многое другое
                </div><a class="navigation-parent__more" href="/treatment/"> </a>
            </div>
            <div class="navigation-parent__image"> <img
                    src="https://st18.stpulscen.ru/images/product/331/501/780_big.jpg" alt="" data-aos="flip-down">
            </div>
            <div class="navigation-parent__service">
                <div class="navigation-parent__counter">Интернет-магазин</div>
                <div class="navigation-parent__description">Выкупаем ваши исправные и неисправные турбины из любого
                    города. Чтобы узнать, как продать
                    турбину
                </div><a class="navigation-parent__more" href="#shop"> </a>
            </div>
        </div>
    </div> -->
</main>
<div class="map-container" id="contacts">
    <div id="newMap"></div>
</div>
<script>
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('newMap', {
            center: [52.308676, 104.294009],
            zoom: 14
        }),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            balloonContent: 'г. Иркутск, ул. Сурнова, 22/7, Кардан-сервис',
            iconCaption: 'г. Иркутск, ул. Сурнова, 22/7, Кардан-сервис',
        }, {
            iconLayout: 'default#image',
            iconImageHref: "<?php echo get_template_directory_uri() . '/assets/images/content/logo_custom.svg'?>",
            iconImageSize: [30, 42],
            iconImageOffset: [-5, -38],
        })

    myMap.geoObjects
        .add(myPlacemark);
}
</script>
<?php
get_footer();