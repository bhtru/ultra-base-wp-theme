<?php
/**
 * Steady Commerce Theme Functions
 *
 * @package Steady_Commerce
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('STEADY_THEME_VERSION', '1.0.0');
define('STEADY_THEME_DIR', get_template_directory());
define('STEADY_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function steady_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));
    
    // Add WooCommerce support
    add_theme_support('woocommerce');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'steady-commerce'),
        'footer' => __('Footer Menu', 'steady-commerce'),
    ));
}
add_action('after_setup_theme', 'steady_theme_setup');

/**
 * Enqueue scripts and styles
 */
function steady_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style('steady-style', get_stylesheet_uri(), array(), STEADY_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'steady_enqueue_scripts');

// Include additional functionality
// Claude Code will add includes here