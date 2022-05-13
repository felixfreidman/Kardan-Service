<?php /* Template Name: Страница Услуги */

get_header();
$benefits_header = get_field('benefits_header');
$intro_content = get_field('intro_content');
$header = get_field('header');
$subheader = get_field('subheader');
$section_header = get_field('section_header');
$form_header = get_field('form_header');
$form_subheader = get_field('form_subheader');
?>
<div class="main main-typical">
    <div class="main_welcome-section">
        <span class="welcome-section_header">
            <?=$header?>
        </span>
        <span class="welcome-section_subheader">
            <?=$subheader?>
        </span>
        <form class="main_number-application-form" id="serviceForm">
            <span class="number-application-form_label">Подайте заявку уже сейчас!</span>
            <div class="requiredActions-section_telephone-input" id="application-form_input">
                <input type="text" class="telephone-input_name" required placeholder="Ваше имя" id="serviceName" />
            </div>
            <div class="requiredActions-section_telephone-input" id="application-form_input">
                <div class="telephone-input_preNumber">+7</div>
                <input type="text" class="telephone-input_number" required id="servicePhone" />
            </div>
            <button class="number-application-form_button" id="earlyNumberApplicationButton">
                Отправить
            </button>
        </form>
    </div>
    <div class="main_intro-section">
        <div class="intro-section__block">
            <div class="intro-section__title">Не из города Иркутска?</div>
            <div class="intro-section__subtitle"><?=$form_subheader?></div>
            <div class="intro-section__button modal-button">Оставить заявку</div>
        </div>
        <div class="intro-section__block second-block">
            <div class="intro-section__title"><?=$form_header?></div>
            <div class="intro-section__subtitle"><?=$form_subheader?></div>
            <div class="intro-section__button modal-button">Оставить заявку</div>
        </div>

    </div>
    <?php if (have_rows('action_repeater')):?>
    <div class="main__actions">
        <div class="header-section-header"><?=$section_header?></div>
        <div class="header-bar"></div>
        <div class="action-container">
            <?php while( have_rows('action_repeater') ) : the_row();
                            $action_logo = get_sub_field("action_logo");
                            $action_header = get_sub_field("action_header");?>
            <div class="action-image">
                <img src="<?=$action_logo?>" alt="" class="action-image__image" />
                <div class="action-image__content">
                    <?=$action_header?>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
    <?php endif;?>

    <div class="main--form form-parent" style="margin-top: 0">
        <form class="form-container" data-aos="flip-down" id="miniApplyForm"
            style="padding: 40px 135px; width: calc(100% - 270px)">
            <div class=" container">
                <div class="form-parent__title">Перезвоним за 2 минуты</div>
                <div class="form-parent__subtitle"> Наш менеджер готов перезвонить вам в течение 2-ух минут, помочь
                    с подбором или принять в ремонт вашу запчасть</div>
                <div class="form-parent__bar"></div>
            </div>
            <div class="form-apply">
                <div class="special-row" style="width: 70% !important"><label class="form-parent__label"
                        for="userNameMini">Имя<input id="userNameMini" class="form-parent__input"
                            type="text"></label><label class="form-parent__label" for="userPhoneMini">Телефон<input
                            id="userPhoneMini" class="form-parent__input" type="text"></label>
                </div><button class="form-parent__button miniButton" type="submit">Оставить</button>
            </div>
        </form>
    </div>

    <div class="main_services-section" id="benefit-section">
        <div class="header-container" style="margin-bottom : 0px">
            <div class="header-section-header"><?=$benefits_header?></div>
            <div class="header-bar"></div>
        </div>
        <div class="services-section">
            <?php while( have_rows('benefit_repeater') ) : the_row();
                            $benefit_header = get_sub_field("benefit_header");
                            $benefit_content = get_sub_field("benefit_content"); ?>

            <div class="section_content">
                <div class="section-number"><?=$benefit_content?></div>
                <div class="section-header"><?=$benefit_header?></div>
            </div>
            <?php endwhile;?>

        </div>

    </div>



    <!-- <div class="main--form form-parent" style="margin-top: 20px">
        <form class="form-container" data-aos="flip-down" id="otherApplyForm"
            style='background-image: url(https://t3.ftcdn.net/jpg/02/94/99/24/360_F_294992494_kPG2PgIe6Jn9sU4OcSw6Th6SvZD4OfWy.jpg); box-shadow: inset 0 0 10px 1000px rgba(0,0,0, 0.5)'>
            <div class=" container">
                <div class="form-parent__title" style="color:#F99F38">Не из города Иркутска?</div>
                <div class="form-parent__subtitle">Узнайте как отправить нам свою деталь, чтобы мы починили и отправили
                    вам обратно</div>
                <div class="form-parent__bar"></div>
            </div>
            <div class="form-apply">
                <div class="special-row" style="width: 70% !important">
                    <label class="form-parent__label" for="userNameOther">Имя
                        <input id="userNameOther" class="form-parent__input" type="text">
                    </label>
                    <label class="form-parent__label" for="userPhoneOther">Телефон
                        <input id="userPhoneOther" class="form-parent__input" type="text">
                    </label>
                    <label class="form-parent__label" for="userCityOther">Ваш город
                        <input id="userCityOther" class="form-parent__input" type="text">
                    </label>
                </div><button class="form-parent__button" type="submit">Оставить</button>
            </div>
        </form>
    </div> -->

</div>
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