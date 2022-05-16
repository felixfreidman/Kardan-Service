<html lang="en">
<?php
$address = get_field("address", "option");
$telephone_first = get_field("telephone_second", "option");
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Кардан-Сервис: <?=get_the_title() ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?=get_template_directory_uri() . '/assets/images/content/logo_custom.svg'; ?>">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=db32f154-f5b8-442a-bb04-5f55f07bbae7&lang=ru_RU"
        type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <?php ini_set('display_errors', FALSE); ?>

    <header class="header">
        <div class="header-row header-row--fixed">
            <div class="header-logo">
                <a href="<?=home_url();?>"><img
                        src="<?=get_template_directory_uri() . '/assets/images/content/logo_custom.svg'?>" alt=""></a>
            </div>
            <div class="header-caption">Кардан-сервис</div>
            <div class="header-address">
                <div class="address-logo"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/mapMarker.svg'?>" alt="">
                </div>
                <div class="address-value"><?=$address?></div>
            </div>
            <div class="header-phone">
                <div class="phone-logo"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/phoneCall.svg'?>" alt="">
                </div><a class="phone-value" href="tel:+<?=$telephone_first?>">+<?=$telephone_first?></a>
            </div>
            <a class="header__book" href="<?=home_url();?>/cart"><img
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/cart_image.svg'?>" alt="" />
                <div class="book-header">Моя корзина</div><span class="book-counter">0</span>
            </a>
        </div>
        <div class="header-row header-row--static">
            <div class="header-navigation"> <a href="<?=home_url();?>#services">Услуги</a><a
                    href="<?=home_url();?>#shop">Магазин</a><a href="<?=home_url();?>/contacts">Контакты </a></div>
        </div>
    </header>
    <div class="mobile-header">
        <div class="header-logo">
            <a href="<?=home_url();?>"><img
                    src="<?=get_template_directory_uri() . '/assets/images/content/logo_custom.svg'?>" alt=""></a>
        </div>
        <div class="header-caption">Кардан-сервис</div>
        <div class="mobile-header__burger-menu ">
            <span class="cross-one--mobile"></span><span class="cross-two--mobile"></span><span
                class="cross-left"></span>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="navigation" id="mobileNavigation">
            <a href="<?=home_url();?>#services" class="mobileLink">Услуги</a>
            <a href="<?=home_url();?>#shop" class="mobileLink">Магазин</a>
            <a href="<?=home_url();?>/contacts" class="mobileLink">Контакты </a>

        </div>
        <div class="header-address">
            <div class="address-logo"> <img
                    src="<?=get_template_directory_uri() . '/assets/images/content/mapMarker.svg'?>" alt="">
            </div>
            <div class="address-value"><?=$address?></div>
        </div>
        <div class="header-phone">
            <div class="phone-logo"> <img
                    src="<?=get_template_directory_uri() . '/assets/images/content/phoneCall.svg'?>" alt="">
            </div><a class="phone-value" href="tel:+<?=$telephone_first?>">+<?=$telephone_first?></a>
        </div>
        <a class="header__book" href="<?=home_url();?>/cart">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/content/cart_image.svg'?>" alt="" />
            <div class="book-header">Моя корзина</div><span class="book-counter">0</span>
        </a>
    </div>