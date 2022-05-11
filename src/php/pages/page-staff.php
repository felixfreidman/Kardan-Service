<?php /* Template Name: Страница Товаров */

get_header();
?>
<main class="main main-staff">
    <div class="breadcrumbs">
        <a href="<?=home_url();?>">Главная</a> /
        <a href="<?php echo get_permalink() ?>"><?=get_the_title() ?></a>
    </div>
    <div class="header-container">
        <div class="header"><?=get_the_title() ?></div>
    </div>
    <?php 
            $section_header = get_field("section_header");
            $section_amount = get_field("section_amount");
            $section_tax = get_field("section_tax");
            $my_staff = array(
                'post_type' => $section_tax,
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
            );
            
            $loop_section = new WP_Query($my_staff);
    ?>
    <div class="subheader">Выкупаем ваши исправные и неисправные турбины из любого города. Чтобы узнать, как продать
        турбину,
        оставьте заявку
    </div>
    <div class="modal-button">
        Оставить заявку
    </div>
    <div class="header-bar"></div>
    <div class="filter-section">
        <?php
        if($section_tax == "kardan-staff") {
            $terms_brand = get_terms(array(
                'taxonomy' => 'auto_brand',
                'hide_empty' => false,
            ));
            $terms_motor = get_terms(array(
                'taxonomy' => 'auto_motor',
                'hide_empty' => false,
            ));

            $page_num = 480;
        } else {
            $terms_brand = get_terms(array(
                'taxonomy' => 'auto_brand_turbo',
                'hide_empty' => false,
            ));
            $terms_motor = get_terms(array(
                'taxonomy' => 'auto_motor_turbo',
                'hide_empty' => false,
            ));
            $page_num = 482;
        }
        
        ?>
        <div class="filter-header">
            Марки автомобиля
            <div class="projects-filter"><span class="filter-header">Марки автомобиля</span>
                <ul class="filter-list">
                    <li class="filter-elem">
                        <a href="<?php the_permalink($page_num);?>" class="category category--active">Все</a>
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
                        <a href="<?php the_permalink($page_num);?>" class="category category--active">Все</a>
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
            <div class="header"><?=$section_header?></div>
        </div>
        <div class="staff-container">

            <?php while ($loop_section->have_posts()): $loop_section->the_post();

                        get_template_part('template/staff-card');
                        $i++;
                        endwhile;
                        wp_reset_postdata();
                    ?>
        </div>
    </div>
</main>


<?php
get_footer();