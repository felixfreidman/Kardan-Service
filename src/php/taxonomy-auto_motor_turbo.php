<?php get_header();

$taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$mypost = array(
    'post_type' => 'turbo-staff',
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'auto_motor_turbo',
            'field' => 'slug',
            'terms' => $taxonomy->slug,
        ),
    ),
);
$terms_brand = get_terms(array(
    'taxonomy' => 'auto_brand_turbo',
    'hide_empty' => false,
));
$terms_motor = get_terms(array(
    'taxonomy' => 'auto_motor_turbo',
    'hide_empty' => false,
));
$loop = new WP_Query($mypost);
$i = 0;
?>


<main class="main main-staff">
    <div class="breadcrumbs">
        <a href="<?=home_url();?>">Главная</a> /
        <a href="<?=home_url();?>/turbo-shop">Магазин турбин</a>
    </div>
    <div class="header-container">
        <div class="header">Турбины</div>
    </div>
    <div class="subheader">Выкупаем ваши исправные и неисправные турбины из любого города. Чтобы узнать, как продать
        турбину,
        оставьте заявку
    </div>
    <div class="header-bar"></div>
    <div class="filter-section">
        <div class="filter-header">
            Марки автомобиля
            <div class="projects-filter"><span class="filter-header">Марки автомобиля</span>
                <ul class="filter-list">
                    <li class="filter-elem">
                        <a href="<?php the_permalink(482);?>" class="category">Все</a>
                    </li>
                    <?php foreach ($terms_brand as $key => $term): ?>
                    <?php $active = 0;?>
                    <?php $active = $term == $taxonomy ? true : $active?>
                    <li class="filter-elem">
                        <a href="<?=get_term_link($term)?>"
                            class="category<?=$term == $taxonomy ? ' category--active' : ''?>"><?=$term->name?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="filter-header">
            Типы двигателей
            <div class="projects-filter projects-filter--motor"><span class="filter-header">Типы двигателей</span>
                <ul class="filter-list">
                    <li class="filter-elem">
                        <a href="<?php the_permalink(482);?>" class="category">Все</a>
                    </li>
                    <?php foreach ($terms_motor as $key => $term): ?>
                    <?php $active = 0;?>
                    <?php $active = $term == $taxonomy ? true : $active?>
                    <li class="filter-elem">

                        <a href="<?=get_term_link($term)?>"
                            class="category<?=$term == $taxonomy ? ' category--active' : ''?>"><?=$term->name?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>

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
    <div class="section">
        <div class="section__header-container">
            <div class="header">Карданы</div>
        </div>
        <div class="staff-container">

            <?php while ($loop->have_posts()): $loop->the_post();

                        get_template_part('template/staff-card');
                        endwhile;
                        wp_reset_postdata();
                    ?>
        </div>
    </div>
</main>
<div class="main_intro-section">
    <div class="intro-section__block">
        <div class="intro-section__title">Доставка в любое место</div>
        <div class="intro-section__subtitle">Доставляем в любое место </div>
        <!-- <div class="intro-section__button modal-button">Оставить заявку</div> -->
    </div>
    <div class="intro-section__block second-block">
        <div class="intro-section__title">Гарантия на запчасти до 2-х лет</div>
        <div class="intro-section__subtitle">Гарантируем, что помняем детали в случае нашей ошибки</div>
        <!-- <div class="intro-section__button modal-button">Оставить заявку</div> -->
    </div>

</div>
<?php
get_footer();