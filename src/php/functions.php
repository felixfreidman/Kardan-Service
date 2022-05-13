<?php

$email_to = get_field('mail', 'options');
if ('disable_gutenberg') {
    add_filter('use_block_editor_for_post_type', '__return_false', 100);

    // отключим подключение базовых css стилей для блоков
    // ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
    remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/style.css");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/main.min.css");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/assets/js/main.min.js");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/assets/js/main.js");
}

add_action('wp_enqueue_scripts', 'project_scripts'); // хук автоматом сработает во время wp_head
function project_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), null, false);
    wp_enqueue_script('jquery');
    wp_register_script('plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), null, true);
    wp_enqueue_script('plugins');
}

// настройки темы
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Основные настройки',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}

add_theme_support('post-thumbnails');

// кастомный размер миниатюры
add_image_size('my-bg', 1200, 700, true);
add_image_size('my-mini', 330, 330, true);

// AJAX и отправка писем

function ajax_form_scripts()
{
    $translation_array = array(
        'ajax_url' => admin_url('admin-ajax.php'),
    );
    wp_localize_script('main', 'cpm_object', $translation_array);
}

add_action('wp_enqueue_scripts', 'ajax_form_scripts');
function ajax_form()
{
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $mail = $_REQUEST['mail'];
    $order = $_REQUEST['order'];
    $response = '';
    $thm = 'Заказ с сайта Кардан-Сервис';
    $thm = "=?utf-8?b?" . base64_encode($thm) . "?=";
    $msg = "<br />Имя: " . $name . "<br />
    Телефон: " . $phone . "<br />
    Почта: " . $mail . "<br />
    Заказ: " . $order . "<br />";
    $mail_to = get_field("mail", 'option');

    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= 'От: Parovoz.Сайт' . "\r\n";

// Отправляем почтовое сообщение

    if (mail($mail_to, $thm, $msg, $headers)) {
        $response = 'Отправили!';
    } else {
        $response = 'Ошибка при отправке';
    }

// Сообщение о результате отправки почты

    if (defined('DOING_AJAX') && DOING_AJAX) {
        echo $response;
        wp_die();
    }
}


add_action('wp_ajax_nopriv_ajax_form', 'ajax_form');
add_action('wp_ajax_ajax_form', 'ajax_form');


function ajax_apply()
{
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $response = '';
    $thm = 'Заявка с сайта Кардан-Сервис';
    $thm = "=?utf-8?b?" . base64_encode($thm) . "?=";
    $msg = "<br />Имя: " . $name . "<br />
    Телефон: " . $phone . "<br />";
    $mail_to = get_field("mail", 'option');

    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= 'От: Кардан-Сервис' . "\r\n";

// Отправляем почтовое сообщение

    if (mail($mail_to, $thm, $msg, $headers)) {
        $response = 'Отправили!';
    } else {
        $response = 'Ошибка при отправке';
    }

// Сообщение о результате отправки почты

    if (defined('DOING_AJAX') && DOING_AJAX) {
        echo $response;
        wp_die();
    }
}


add_action('wp_ajax_nopriv_ajax_apply', 'ajax_apply');
add_action('wp_ajax_ajax_apply', 'ajax_apply');

function ajax_miniapply()
{
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $response = '';
    $thm = 'Заявка с сайта Кардан-Сервис';
    $thm = "=?utf-8?b?" . base64_encode($thm) . "?=";
    $msg = "<br />Имя: " . $name . "<br />
    Телефон: " . $phone . "<br />";
    $mail_to = get_field("mail", 'option');

    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= 'От: Кардан-Сервис' . "\r\n";

// Отправляем почтовое сообщение

    if (mail($mail_to, $thm, $msg, $headers)) {
        $response = 'Отправили!';
    } else {
        $response = 'Ошибка при отправке';
    }

// Сообщение о результате отправки почты

    if (defined('DOING_AJAX') && DOING_AJAX) {
        echo $response;
        wp_die();
    }
}


add_action('wp_ajax_nopriv_ajax_miniapply', 'ajax_miniapply');
add_action('wp_ajax_ajax_miniapply', 'ajax_miniapply');

function ajax_serviceform()
{
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $response = '';
    $thm = 'Заявка с сайта Кардан-Сервис';
    $thm = "=?utf-8?b?" . base64_encode($thm) . "?=";
    $msg = "<br />Имя: " . $name . "<br />
    Телефон: " . $phone . "<br />";
    $mail_to = get_field("mail", 'option');

    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= 'От: Кардан-Сервис' . "\r\n";

// Отправляем почтовое сообщение

    if (mail($mail_to, $thm, $msg, $headers)) {
        $response = 'Отправили!';
    } else {
        $response = 'Ошибка при отправке';
    }

// Сообщение о результате отправки почты

    if (defined('DOING_AJAX') && DOING_AJAX) {
        echo $response;
        wp_die();
    }
}


add_action('wp_ajax_nopriv_ajax_serviceform', 'ajax_serviceform');
add_action('wp_ajax_ajax_serviceform', 'ajax_serviceform');


function ajax_othercityform()
{
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $city = $_REQUEST['city'];
    $response = '';
    $thm = 'Заявка с сайта Кардан-Сервис';
    $thm = "=?utf-8?b?" . base64_encode($thm) . "?=";
    $msg = "<br />Имя: " . $name . "<br />
    Телефон: " . $phone . "<br />
    Город: " . $city . "<br />";
    $mail_to = get_field("mail", 'option');

    $headers = "Content-Type: text/html; charset=utf-8\n";
    $headers .= 'От: Кардан-Сервис' . "\r\n";

// Отправляем почтовое сообщение

    if (mail($mail_to, $thm, $msg, $headers)) {
        $response = 'Отправили!';
    } else {
        $response = 'Ошибка при отправке';
    }

// Сообщение о результате отправки почты

    if (defined('DOING_AJAX') && DOING_AJAX) {
        echo $response;
        wp_die();
    }
}


add_action('wp_ajax_nopriv_ajax_othercityform', 'ajax_othercityform');
add_action('wp_ajax_ajax_othercityform', 'ajax_othercityform');