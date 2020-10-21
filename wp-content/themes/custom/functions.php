<?php
// if (!function_exists('custom_setup')) {

// }

add_action('after_setup_theme', 'custom_setup');

/**
 * Theme setup function
 */

function custom_setup()
{
    // Custom logo.
    $logo_width  = 120;
    $logo_height = 90;
    add_theme_support(
        'custom-logo',
        array(
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    add_theme_support('post-thumbnails');
};

// wp_enqueue_scripts loads custom_register_styles
add_action( 'wp_enqueue_scripts', 'custom_register_styles');

/**
 * Enqueue stylesheets
 */

//  Runs function to load stylesheet
function custom_register_styles() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . "/style.css" );
};
 