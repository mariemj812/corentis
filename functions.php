<?php
/**
 * Corentis Consulting Group — Theme Functions
 *
 * @package Corentis
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Theme version
define( 'CORENTIS_VERSION', '1.4.0' );

/**
 * Theme Setup
 */
function corentis_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );

    // HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register navigation menu
    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'corentis' ),
    ) );
}
add_action( 'after_setup_theme', 'corentis_setup' );

/**
 * Enqueue Styles & Scripts
 */
function corentis_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'corentis-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'corentis-style',
        get_template_directory_uri() . '/css/style.css',
        array( 'corentis-google-fonts' ),
        CORENTIS_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'corentis-main',
        get_template_directory_uri() . '/js/main.js',
        array(),
        CORENTIS_VERSION,
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'corentis_scripts' );

/**
 * Remove Google Fonts @import from CSS (loaded via wp_enqueue instead)
 */
function corentis_remove_css_import( $html, $handle ) {
    return $html;
}

/**
 * Helper: Get theme image URL
 */
function corentis_img( $filename ) {
    return get_template_directory_uri() . '/images/' . $filename;
}

/**
 * Helper: Get page URL by slug
 */
function corentis_page_url( $slug ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return get_permalink( $page->ID );
    }
    return home_url( '/' . $slug . '/' );
}

/**
 * Auto-create pages on theme activation
 */
function corentis_activate_theme() {
    require_once get_template_directory() . '/inc/setup-pages.php';
    corentis_create_pages();
}
add_action( 'after_switch_theme', 'corentis_activate_theme' );

/**
 * Remove WordPress toolbar margin on front-end
 */
function corentis_admin_bar_fix() {
    if ( is_admin_bar_showing() ) {
        echo '<style>html.has-topbar { margin-top: 0 !important; } #wpadminbar { position: fixed !important; }</style>';
    }
}
add_action( 'wp_head', 'corentis_admin_bar_fix' );
