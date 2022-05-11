<?php
 /* Template Name: Пример турбины */
 get_header();

 $article_bg = get_field('article_bg');
 
 ?>
 <main class="main main-service">
     <div class="main--buy buy-parent">
         <div class="container">
             <div class="swiper-container">
                 <div class="swiper" id="watchSwiper">
                     <div class="swiper-wrapper">
                         <div class="swiper-slide preview"> <img
                                 src="<?php echo get_template_directory_uri() . '/assets/images/content/article_bg1.png'?>"
                                 alt="">
                         </div>
                         <div class="swiper-slide preview"> <img
                                 src="<?php echo get_template_directory_uri() . '/assets/images/content/article_bg2.png'?>"
                                 alt="">
                         </div>
                         <div class="swiper-slide preview"> <img
                                 src="<?php echo get_template_directory_uri() . '/assets/images/content/article_bg4.png'?>"
                                 alt="">
                         </div>
                     </div>
                     <div class="swiper-button-next"> </div>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-pagination"></div>
                 </div>
             </div>
             <div class="buy-parent__info">
                 <div class="buy-parent__section">
                     <div class="buy-parent__product-header"><?=get_the_title() ?></div>
                     <div class="buy-parent__product-description">Описание кардана</div>
                     <div class="buy-parent__row">
                         <div class="buy-parent__price-container">
                             <div class="buy-parent__price-tag">6990 ₽</div>
                             <div class="buy-parent__caption">от 120 ₽/мес в аренду</div>
                         </div>
                         <div class="buy-parent__button">Купить</div>
                     </div>
                 </div>
                 <div class="flex-card">
                     <div class="open-indicator"> <img src="./assets/images/content/arrow.svg" alt=""></div>
                     <div class="flex-card__base-row">
                         <div class="logo"> <img src="./assets/images/content/settings.svg" alt=""></div>
                         <div class="flex-card__header">Технические характеристики</div>
                     </div>
                     <div class="flex-card__opening-row">
                         <div class="flex-card__content">
                             <div class="content-column">
                                 <div class="content-column__logo"> <img src="./assets/images/content/apple.svg" alt="">
                                 </div>
                                 <div class="content-column__header">iOS</div>
                                 <div class="content-column__subheader">v12 и выше</div>
                             </div>
                             <div class="content-column">
                                 <div class="content-column__logo"> <img src="./assets/images/content/android.svg"
                                         alt=""></div>
                                 <div class="content-column__header">Android</div>
                                 <div class="content-column__subheader">v5 и выше</div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="flex-card">
                     <div class="open-indicator"> <img src="./assets/images/content/arrow.svg" alt=""></div>
                     <div class="flex-card__base-row">
                         <div class="logo"> <img src="./assets/images/content/sovmest.svg" alt=""></div>
                         <div class="flex-card__header">Совместимость</div>
                     </div>
                     <div class="flex-card__opening-row">
                         <div class="flex-card__content">
                             <div class="content-column">
                                 <div class="content-column__logo"> <img src="./assets/images/content/apple.svg" alt="">
                                 </div>
                                 <div class="content-column__header">iOS</div>
                                 <div class="content-column__subheader">v12 и выше</div>
                             </div>
                             <div class="content-column">
                                 <div class="content-column__logo"> <img src="./assets/images/content/android.svg"
                                         alt=""></div>
                                 <div class="content-column__header">Android</div>
                                 <div class="content-column__subheader">v5 и выше</div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="flex-card">
                     <div class="open-indicator"> <img src="./assets/images/content/arrow.svg" alt=""></div>
                     <div class="flex-card__base-row">
                         <div class="logo"> <img src="./assets/images/content/instruction.svg" alt=""></div>
                         <div class="flex-card__header">Условия использования</div>
                     </div>
                     <div class="flex-card__opening-row">
                         <div class="flex-card__content">
                             <div class="content-column">
                                 <div class="content-column__logo"> <img src="./assets/images/content/apple.svg" alt="">
                                 </div>
                                 <div class="content-column__header">iOS</div>
                                 <div class="content-column__subheader">v12 и выше</div>
                             </div>
                             <div class="content-column">
                                 <div class="content-column__logo"> <img src="./assets/images/content/android.svg"
                                         alt=""></div>
                                 <div class="content-column__header">Android</div>
                                 <div class="content-column__subheader">v5 и выше</div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
 <?php
 get_footer();