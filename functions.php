<?php


// Adding CSS And JS
function add_css_js_setup() {
    // style.css
    wp_enqueue_style('style', get_stylesheet_uri(), '', '', 'all');

    // Scroll Animation Library CSS
    wp_enqueue_style('scroll-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", '', '', 'all');

    // main.js
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', '', '5.7', true);

    // Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/780dbeb6e4.js', '', '', true);

    // If Post Page Run Scroll Bar Script
    if(is_single()) {
        wp_enqueue_script('scroll-bar', get_template_directory_uri() . '/js/scroll.js', '', '', true);
    }
}

add_action('wp_enqueue_scripts', 'add_css_js_setup');


// Adding New Features
function add_theme_features() {
    // Dynamic Page Title
    add_theme_support('title-tag');

    // Post Thumbnails
    add_theme_support('post-thumbnails');

    // Search Form Compatibility
    add_theme_support('html5', array('search-form'));

    // Header Logo Can Be Adjusted In Appearance
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'add_theme_features');


// Review Custom Post Type
function add_review_post_type() {
    register_post_type('reviews', array(
        'labels' => array(
            'name' => 'Reviews',
            'singular_name' => 'Review',
        ),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category', 'post_tag'),
        'menu_icon' => 'dashicons-hammer',
        'show_in_rest' => 'true',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        

    ));
}

add_action('init', 'add_review_post_type');


// Register Navigation Menu
function add_nav_menu() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'text_domain'),
        'footer-menu' => __('Footer Menu', 'text_domain'),
    ));
}

add_action('init', 'add_nav_menu');

require_once get_template_directory() . '/inc/customizer.php';