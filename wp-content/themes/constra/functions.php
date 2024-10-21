<?php
// Theme setup
function constra_theme_setup() {
    // Add title tag support
    add_theme_support('title-tag');
    // Add post thumbnail support
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support( 'custom-logo' );

    // Register menus
    
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));

}
add_action('after_setup_theme', 'constra_theme_setup');

function register_my_menus() {
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


// Enqueue styles and scripts
function constra_enqueue_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/scss/bootstrap.scss');
    wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/css/all.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('colorbox', get_template_directory_uri() . '/css/colorbox/colorbox.css');

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'constra_enqueue_scripts');
?>
