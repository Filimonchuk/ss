<?php

/**
 * загрудаемые стили и скрипты
 **/
function load_style_script(){

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('menumobile', get_template_directory_uri() . '/js/menumobile.js');
    wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js');
    wp_enqueue_script('menumobile', get_template_directory_uri() . '/js/menumobile.js');
    wp_enqueue_script('modalform', get_template_directory_uri() . '/js/modalform.js');
    wp_enqueue_script('scrolldown', get_template_directory_uri() . '/js/scrolldown.js');
    wp_enqueue_script('setdate', get_template_directory_uri() . '/js/setdate.js');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('mainstyle-css', get_template_directory_uri() . '/css/mainstyle.min.css');


    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/css/fonts.css');


    wp_enqueue_style('reset-css', get_template_directory_uri() . '/css/reset.css');


}

/**
 * загружаем стили и скрипты
 **/
add_action('wp_enqueue_scripts', 'load_style_script');