<?php
 /* Template Name: Пример кардана */
get_header();

$staff_price = get_field("staff_price");
$staff_name = get_field("staff_name");
$staff_bg = get_field("staff_bg");
$staff_description = get_field("staff_description");

?>
<main class="main main-service">
    <div class="main--buy buy-parent">
        <div class="container">
            <div class="swiper-container" style="background-image:url('<?=$staff_bg?>');">
            </div>
            <div class="buy-parent__info">
                <div class="buy-parent__section">
                    <div class="buy-parent__product-header">
                        <?=$staff_name?>
                    </div>
                    <div class="buy-parent__product-description"><?=$staff_description?></div>
                    <div class="buy-parent__row">
                        <div class="buy-parent__price-container">
                            <div class="buy-parent__price-tag"><?=$staff_price?> ₽</div>
                        </div>

                        <div class="buy-parent__button modal-button">Быстрый заказ</div>
                        <div class="buy-parent__button cart-button">Добавить в корзину</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();