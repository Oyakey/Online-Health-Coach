<?php

function julien_supports()
{
    add_theme_support('title-tag');
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'julien_supports');

function julien_register_assets()
{
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'julien_register_assets');

function wpc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', function () {
        acf_register_block_type([
            'name' => 'featured_in',
            'title' => 'Featured In',
            'render_template' => 'blocs/featured.php'
        ]);

        acf_register_block_type([
            'name' => 'review',
            'title' => 'Review',
            'render_template' => 'blocs/review.php'
        ]);

        acf_register_block_type([
            'name' => 'course',
            'title' => 'Course',
            'render_template' => 'blocs/course.php'
        ]);
    });
}

function wpb_custom_new_menu()
{
    register_nav_menu('my-custom-menu', __('My Custom Menu'));
}

add_action('init', 'wpb_custom_new_menu');
