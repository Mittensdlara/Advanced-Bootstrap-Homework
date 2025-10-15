<?php
/**
 * Déluxara Theme functions and definitions
 */

if ( ! defined( 'DELUXARA_VERSION' ) ) {
    define( 'DELUXARA_VERSION', '1.0.0' );
}

add_action( 'after_setup_theme', 'deluxara_theme_setup' );
/**
 * Set up theme defaults and supports.
 */
function deluxara_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'deluxara' ),
    ) );
}

add_action( 'wp_enqueue_scripts', 'deluxara_enqueue_assets' );
/**
 * Enqueue theme styles and scripts.
 */
function deluxara_enqueue_assets() {
    wp_enqueue_style(
        'deluxara-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'deluxara-style',
        get_stylesheet_uri(),
        array( 'deluxara-fonts' ),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    wp_enqueue_script(
        'deluxara-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime( get_template_directory() . '/assets/js/main.js' ),
        true
    );
}

/**
 * Fallback navigation menu with in-page anchors.
 */
function deluxara_default_menu() {
    $links = array(
        'home'       => __( 'Experience', 'deluxara' ),
        'services'   => __( 'Atelier', 'deluxara' ),
        'portfolio'  => __( 'Portfolio', 'deluxara' ),
        'about'      => __( 'Philosophy', 'deluxara' ),
        'contact'    => __( 'Consultation', 'deluxara' ),
    );

    echo '<ul class="nav-links">';
    foreach ( $links as $slug => $label ) {
        printf(
            '<li><a href="#%1$s">%2$s</a></li>',
            esc_attr( $slug ),
            esc_html( $label )
        );
    }
    echo '</ul>';
}
