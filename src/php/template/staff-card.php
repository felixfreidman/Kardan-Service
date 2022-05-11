<?php 
$staff_price = get_field("staff_price");
$staff_name = get_field("staff_name");
$staff_bg = get_field("staff_bg");
$post = get_post();
$terms_brand = get_the_terms( $post->ID, 'auto_brand'); 
$terms_motor = get_the_terms( $post->ID, 'auto_motor'); 
$terms_brand_turbo = get_the_terms( $post->ID, 'auto_brand_turbo'); 
$terms_motor_turbo = get_the_terms( $post->ID, 'auto_motor_turbo'); 
?>
<div class="container-card"> <img src="<?=$staff_bg?>" alt="" />
    <div class="container-card__container">
        <div class="container-card__row">
            <div class="container-card__name"><?=$staff_name?></div>
            <div class="container-card__price"><?=$staff_price?> ₽</div>
        </div>
        <div class="project-filter">
            <?php foreach ($terms_brand as $term):?>
            <span class="filter__item">
                <?php echo $term->name;?>
            </span>
            <?php endforeach;?>
            <?php foreach ($terms_motor as $term):?>
            <span class="filter__item">
                <?php echo $term->name;?>
            </span>
            <?php endforeach;?>
            <?php foreach ($terms_brand_turbo as $term):?>
            <span class="filter__item">
                <?php echo $term->name;?>
            </span>
            <?php endforeach;?>
            <?php foreach ($terms_motor_turbo as $term):?>
            <span class="filter__item">
                <?php echo $term->name;?>
            </span>
            <?php endforeach;?>
        </div>
        <div class="container-card__row">
            <div class="container-card__button modal-button">Быстрый заказ</div>
            <div class="container-card__button">Добавить в корзину</div>
        </div>
    </div>
</div>