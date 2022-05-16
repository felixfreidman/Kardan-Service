<?php /* Template Name: Страница Контакты */

get_header(); 
$instagram = get_field("instagram", "option");
$vk = get_field("vk", "option");
$telephone_first = get_field("telephone_first", "option");
$telephone_second = get_field("telephone_second", "option");
$whatapp = get_field("whatapp", "option");
$address = get_field("address", "option");
?>
<main class="main main-contact">
    <div class="breadcrumbs"><a href="<?=home_url();?>">Главная</a> / <a href="<?=home_url();?>/contacts">Контакты</a>
    </div>
    <div class="header-container">
        <div class="header">Контакты</div>
        <div class="header-bar"></div>
    </div>
    <div class="contact-container">
        <div class="contact-column">
            <div class="column-header">Адреса</div>
            <div class="column-adress"><?=$address?></div>
            <div class="column-caption">ПН-ПТ 9:00–17:00</div>
        </div>
        <div class="contact-column">
            <div class="column-header">Телефон</div><a class="column-link" href="tel:+<?=$telephone_first?>">+
                <?=$telephone_first?></a><a class="column-link" href="tel:+<?=$telephone_second?>">+
                <?=$telephone_second?></a>
        </div>
        <div class="contact-column">
            <div class="column-header">Социальные сети</div>
            <div class="social-container">
                <a class="social-circle" href="https://instagram.com/<?=$instagram?>"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/instaDark.svg'?>"
                        alt="" /></a>
                <a class="social-circle" href="https://vk.com/<?=$vk?>"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/vkDark.svg'?>" alt="" />
                </a>
                <a class="social-circle" href="https://wa.me/<?=$whatapp?>"> <img
                        src="<?php echo get_template_directory_uri() . '/assets/images/content/whatApp_white.svg'?>"
                        alt="" />
                </a>
            </div>
        </div>
    </div>
</main>
<div class="map-container">
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