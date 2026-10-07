<?php

function musicvibe_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
    ));
}

add_action('after_setup_theme', 'musicvibe_setup');


function musicvibe_scripts() {

    wp_enqueue_style(
        'musicvibe-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    wp_enqueue_script(
        'musicvibe-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'musicvibe_scripts');