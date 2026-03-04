<?php
/**
 * Vino Pizza functions and definitions
 */

function vinopizza_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register Menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'vinopizza'),
    ));
}
add_action('after_setup_theme', 'vinopizza_setup');

function vinopizza_scripts()
{
    // Tailwind CSS via CDN
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);

    // Swiper CSS & JS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Sarabun:wght@300;400;600&display=swap', array(), null);

    // Theme Style
    wp_enqueue_style('vinopizza-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'vinopizza_scripts');

// Allow SVG uploads for logos if needed
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Register ACF Fields Programmatically
 */
if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_65e1234567890',
        'title' => 'Restaurant Menu Items',
        'fields' => array(
            array(
                'key' => 'field_65e1234567891',
                'label' => 'Wine List',
                'name' => 'wine_list',
                'type' => 'repeater',
                'layout' => 'table',
                'sub_fields' => array(
                    array(
                        'key' => 'field_65e1234567892',
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_65e1234567893',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_65e1234567894',
                        'label' => 'Price',
                        'name' => 'price',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_65e1234567895',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

endif;

/**
 * Elementor Compatibility
 */
function vinopizza_register_elementor_locations($elementor_theme_manager)
{
    $elementor_theme_manager->register_all_core_locations();
}
add_action('elementor/theme/register_locations', 'vinopizza_register_elementor_locations');
