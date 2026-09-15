<?php

function musicvibe_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'menu-principal' => 'Menu Principal'
    ));
}

add_action('after_setup_theme', 'musicvibe_setup');


function musicvibe_scripts() {

    wp_enqueue_style(
        'musicvibe-style',
        get_stylesheet_uri()
    );

}

add_action('wp_enqueue_scripts', 'musicvibe_scripts');
?>
