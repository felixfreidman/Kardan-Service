<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Кардан-Сервис: <?=get_the_title() ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/assets/images/content/favicon.png'; ?>">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=db32f154-f5b8-442a-bb04-5f55f07bbae7&lang=ru_RU"
        type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
</head>

<body>

    <?php ini_set('display_errors', FALSE); ?>

    <header class="header">
        <div class="logo-container"><a href="<?=home_url();?>#toMain"> <img class="logo"
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/logo_custom.svg'?>"
                    alt="Company Logo" id="toMain" /></a><span class="logo-caption">Кардан Сервис</span></div>
        <div class="navigation">
            <a class="navigation-link" href="<?=home_url();?>#services">Услуги</a>
            <a class="navigation-link" href="<?=home_url();?>/shop-union">Магазин</a>
            <a class="navigation-link" href="<?=home_url();?>/contacts">Контакты</a>
        </div>
        <div class="contacts"> <a href="tel:+74951864203">+7 (495) 186-42-03 </a>
            <div class="address">ул. Сурнова, 22</div>
        </div>
        <div class="apply">
            <div class="apply-btn" id="headerApply"> Оставить заявку</div>
        </div>
    </header>