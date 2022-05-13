<?php
$instagram = get_field("instagram", "option");
$vk = get_field("vk", "option");
$telephone_first = get_field("telephone_first", "option");
$telephone_second = get_field("telephone_second", "option");
$whatapp = get_field("whatapp", "option");
$address = get_field("address", "option");
?>
<footer class="footer" id="toFooter">
    <div class="footer-row footer-row--expanded">
        <div class="logo-container"><a href="<?=home_url();?>#toMain"> <img class="logo" id="toMain"
                    src="<?php echo get_template_directory_uri() . '/assets/images/content/logo_custom.svg'?>"
                    alt="Company Logo" /></a><span class="logo-caption">Кардан-Сервис</span></div>
        <div class="mobile-container mobile-container--second-to-column">
            <div class="navigation"><a class="navigation-link" href="<?=home_url();?>#services">Услуги</a><a
                    class="navigation-link" href="<?=home_url();?>#shop">Магазин</a><a class="navigation-link"
                    href="<?=home_url();?>/contacts">Контакты</a></div>
            <div class="mobile-container mobile-container--first-to-column">
                <div class="contacts"> <a href="tel:+<?=$telephone_second?>">+<?=$telephone_second?></a>
                    <div class="address"><?=$address?></div>
                </div>
                <div class="apply-btn apply-btn--footer modal-button">Оставить заявку</div>
            </div>
        </div>
    </div>
    <div class="footer-row">
        <div class="company-info"><span class="company-name">©2019–2022 Кардан Сервис</span><span
                class="company-privacy">Политика конфиденциальности</span></div>
        <div class="developer-info">Сделано в Freidman Solutions</div>
    </div>
</footer>

<div class="dark-layer js--hidden">
    <form class="form apply-form" id="applyForm">
        <div class="form-close" id="closeForm"><span class="cross-one"> </span><span class="cross-two"></span>
        </div>
        <div class="form-header">Оформление заказа</div>
        <div class="form-subheader">Для заказа потребуются ваши данные</div>
        <label for="userNameApply">ФИО
            <input class="form-input" id="userNameApply" type="text" name="userName" placeholder="ФИО" /></label>
        <label for="userPhoneApply">Ваш телефон
            <input class="form-input" id="userPhoneApply" type="text" name="userName" placeholder="Телефон"
                data-inputmask="'mask' : '+7(999) 999-99-99'" inputmode="text" />
        </label>
        <button class="form-button" type="submit">Заказать</button>
        <div class="form-caption">Нажимая кнопку «Заказать», вы принимаете пользовательское соглашение</div>
    </form>
</div>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.min.js'?>"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/plugins.min.js'?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/main.min.js'?>"></script>

</body>

</html>