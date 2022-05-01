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
                    alt="Company Logo" /></a><span class="logo-caption">Кардан Сервис</span></div>
        <div class="mobile-container mobile-container--second-to-column">
            <div class="navigation"><a class="navigation-link" href="<?=home_url();?>#services">Услуги</a><a
                    class="navigation-link" href="<?=home_url();?>/shop-union">Магазин</a><a class="navigation-link"
                    href="<?=home_url();?>/contacts">Контакты</a></div>
            <div class="mobile-container mobile-container--first-to-column">
                <div class="contacts"> <a href="tel:+<?=$telephone_second?>">+<?=$telephone_second?></a>
                    <div class="address"><?=$address?></div>
                </div>
                <div class="apply">
                    <div class="apply-btn apply-btn--footer">Оставить заявку</div>
                </div>
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
        <div class="form-close" id="closeForm"><span class="cross-one"> </span><span class="cross-two"></span></div>
        <div class="form-header">Оставить отзыв</div>
        <div class="form-row">
            <select class="controls-section__select" id="bathTypeSelect" name="bathType">
                <option value="Ура">Уральская</option>
                <option value="Охо">Охотничья</option>
                <option value="Ямс">Ямская</option>
                <option value="Рыб">Рыбацкая</option>
                <option value="Раз">Раздольная</option>
                <option value="Сем">Семейная</option>
                <option value="Сиб">Сибирская</option>
                <option value="Лес" checked>Лесная</option>
                <option value="Хут">Хуторок</option>
            </select>
            <label for="starRating">Ваша оценка?
                <input type="text" name='starRating' id='starRatingInput' value='5'>
            </label>
        </div>
        <label for="description">Комментарий</label><br />
        <textarea id="description" tabindex="3" name="description" rows="6" class="form-textarea"></textarea>
        <label for="reviewName"> Имя
            <input class="form-input" id="reviewName" type="text" name="userName" placeholder="Ваше имя"></label>
        <button class="form-button" type="submit">Отправить</button>
    </form>
</div>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/jquery.min.js'?>"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/plugins.min.js'?>"></script>
<script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/main.min.js'?>"></script>

</body>

</html>