<?php /* Template Name: Страница Услуги */

get_header();
?>
<div class="main main-typical">
    <div class="main_welcome-section">
        <span class="welcome-section_header">
            LOREM IPSUM<br />
            DOLOR SIT AMET
        </span>
        <span class="welcome-section_subheader">
            We will deal with the rest
        </span>
        <form action="GET" class="main_number-application-form">
            <span class="number-application-form_label">Подайте заявку уже сейчас!</span>
            <div class="requiredActions-section_telephone-input" id="application-form_input">
                <div class="telephone-input_preNumber">+7</div>
                <input type="text" class="telephone-input_number" maxlength="10" pattern="[0][0-9]" required />
            </div>
            <button class="number-application-form_button" id="earlyNumberApplicationButton">
                Отправить
            </button>
        </form>
    </div>
    <div class="main_intro-section">
        <span class="intro-section_text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.
        </span>
    </div>
    <div class="main_services-section" id="benefit-section">
        <div class="header-container">
            <div class="header-section-header">Преимущества</div>
            <div class="header-bar"></div>
        </div>
        <div class="services-section">
            <div class="section_content">
                <div class="content-head">Lorem ipsum dolor sit amet</div>
                <div class="content-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
            </div>
        </div>
        <div class="services-section">
            <div class="section_content">
                <div class="content-head">Lorem ipsum dolor sit amet</div>
                <div class="content-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
            </div>
        </div>
        <div class="services-section">
            <div class="section_content">
                <div class="content-head">Lorem ipsum dolor sit amet</div>
                <div class="content-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
            </div>
        </div>
        <div class="services-section">
            <div class="section_content">
                <div class="content-head">Lorem ipsum dolor sit amet</div>
                <div class="content-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
            </div>
        </div>
    </div>
    <div class="main__actions">
        <div class="header-section-header">Что мы делаем?</div>
        <div class="header-bar"></div>
        <div class="action-swiper-container">
            <div class="swiper action-swiper" id="actionSwiper">
                <div class="swiper-wrapper">
                    <?php while( have_rows('action_repeater') ) : the_row();
                            $action_logo = get_sub_field("action_logo");
                            $action_header = get_sub_field("action_header");
                            $action_desc = get_sub_field("action_desc");?>
                    <div class="swiper-slide">
                        <div class="action-container">
                            <div class="action-container__column">
                                <div class="action-container__header"><?=$action_header?></div>
                                <div class="action-container__caption"><?=$action_desc?></div>
                            </div>
                            <div class="action-container__image"> <img src="<?=$action_logo?>" alt="" /></div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
            <div class="swiper-button-prev"> </div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="main--form form-parent">
        <form class="form-container" data-aos="flip-down">
            <div class="container">
                <div class="form-parent__title">Перезвоним за 2 минуты</div>
                <div class="form-parent__subtitle"> Наш менеджер готов перезвонить вам в течение 2-ух минут, помочь
                    с подбором или принять в ремонт вашу запчасть</div>
                <div class="form-parent__bar"></div>
            </div>
            <div class="form-apply">
                <div class="special-row" style="width: 70% !important"><label class="form-parent__label"
                        for="userName">Имя<input class="form-parent__input" type="text"></label><label
                        class="form-parent__label" for="userName">Телефон<input class="form-parent__input"
                            type="text"></label></div><button class="form-parent__button"
                    type="submit">Оставить</button>
            </div>
        </form>
    </div>
    <div class="main_FAQ-section" id="FAQ-section">
        <input type="checkbox" name="FAQsection" id="firstQuestion" />
        <label for="firstQuestion" class="FAQ-section_question-block">
            <div class="question-block_row">
                <div class="quiestion-block_quiestion-content">
                    Lorem ipsum dolor sit amet?
                </div>
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                            <path d="M0,11 L22,11"></path>
                            <path d="M11,0 L11,22"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="question-block_answer-block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam.
            </div>
        </label>
        <input type="checkbox" name="FAQsection" id="secondQuestion" />
        <label for="secondQuestion" class="FAQ-section_question-block">
            <div class="question-block_row">
                <div class="quiestion-block_quiestion-content">
                    Lorem ipsum dolor sit amet?
                </div>
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                            <path d="M0,11 L22,11"></path>
                            <path d="M11,0 L11,22"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="question-block_answer-block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam.

            </div>
        </label>
        <input type="checkbox" name="FAQsection" id="thirdQuestion" />
        <label for="thirdQuestion" class="FAQ-section_question-block">
            <div class="question-block_row">
                <div class="quiestion-block_quiestion-content">
                    Lorem ipsum dolor sit amet?
                </div>
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                            <path d="M0,11 L22,11"></path>
                            <path d="M11,0 L11,22"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="question-block_answer-block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam.

            </div>
        </label>
        <input type="checkbox" name="FAQsection" id="fourthQuestion" />
        <label for="fourthQuestion" class="FAQ-section_question-block">
            <div class="question-block_row">
                <div class="quiestion-block_quiestion-content">
                    Lorem ipsum dolor sit amet?
                </div>
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                            <path d="M0,11 L22,11"></path>
                            <path d="M11,0 L11,22"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="question-block_answer-block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam.

            </div>
        </label>
        <input type="checkbox" name="FAQsection" id="fifthQuestion" />
        <label for="fifthQuestion" class="FAQ-section_question-block">
            <div class="question-block_row">
                <div class="quiestion-block_quiestion-content">
                    Lorem ipsum dolor sit amet?
                </div>
                <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                    <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                            <path d="M0,11 L22,11"></path>
                            <path d="M11,0 L11,22"></path>
                        </g>
                    </g>
                </svg>
            </div>

            <div class="question-block_answer-block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam.

            </div>
        </label>
    </div>
</div>
<div class="map-container" id="contacts">
    <div id="newMap"></div>
</div>
<script>
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('newMap', {
            center: [56.81122355, 60.72763708],
            zoom: 14
        }),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            balloonContent: 'г. Екатеринбург, ул. Летняя, 20',
            iconCaption: 'г. Екатеринбург, ул. Летняя, 20',
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