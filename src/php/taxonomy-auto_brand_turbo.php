<?php get_header();
$taxonomy = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
$mypost = array(
    'post_type' => 'turbo-staff',
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'auto_brand_turbo',
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
        <a href="<?=home_url();?>/kardan-shop">Магазин карданов</a>
    </div>
    <div class="header-container">
        <div class="header">Карданы</div>
    </div>
    <div class="subheader">Выкупаем ваши исправные и неисправные турбины из любого города. Чтобы узнать, как продать
        турбину,
        оставьте заявку
    </div>
    <div class="modal-button">
        Оставить заявку
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
                        <a href="<?php the_permalink(482);?>" class="category category--active">Все</a>
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

<?php
get_footer();