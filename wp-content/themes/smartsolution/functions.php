<?php

/**
 * загрудаемые стили и скрипты
 **/
function load_style_script(){

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('menumobile', get_template_directory_uri() . '/js/menumobile.js');



    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');




}

/**
 * загружаем стили и скрипты
 **/
add_action('wp_enqueue_scripts', 'load_style_script');