<html lang="en">

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
                <div class="address-value">ул. Сурнова, 22/7</div>
            </div>
            <div class="header-phone">
                <div class="phone-logo"> <img
                        src="<?=get_template_directory_uri() . '/assets/images/content/phoneCall.svg'?>" alt="">
                </div><a class="phone-value" href="">+7 (3952) 66-22-42 </a>
            </div>
        </div>
        <div class="header-row header-row--static">
            <div class="header-navigation"> <a href="<?=home_url();?>#services">Услуги</a><a
                    href="<?=home_url();?>#shop">Магазин</a><a href="<?=home_url();?>#contacts">Контакты </a></div>
        </div>
    </header>