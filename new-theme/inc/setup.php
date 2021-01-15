<?php

add_action( 'after_setup_theme', function() {
    //slick_slider();
    //swiper_bundle();
    //aos_js_animation();
    acf_options('ACF Options');
    theme_support();
});


add_action(  'wp_enqueue_scripts', 'default_theme_styles' );
function default_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_style('app-style', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), null);
}


add_action(  'wp_enqueue_scripts', 'default_theme_scripts' );
function default_theme_scripts() {
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
}


function medihare_menus() {

    register_nav_menus([
        'main_header' => 'Main header'
    ]);
}
add_action('init', 'medihare_menus');