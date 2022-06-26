<?php

function julien_supports()
{
    add_theme_support('title-tag');
    add_theme_support('wp-block-styles');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'julien_supports');

function julien_register_assets()
{
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_register_style('autoComplete', 'https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css');
    wp_register_style('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', [], false, true);
    wp_register_script('autoComplete', 'https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js', [], false, false);
    wp_register_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', [], false, false);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('autoComplete');
    wp_enqueue_style('tiny-slider');
    wp_enqueue_script('tiny-slider');
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
            'category' => 'theme',
            'render_template' => 'blocs/featured.php'
        ]);

        acf_register_block_type([
            'name' => 'review',
            'title' => 'Review',
            'category' => 'theme',
            'render_template' => 'blocs/review.php'
        ]);

        acf_register_block_type([
            'name' => 'course',
            'title' => 'Course',
            'category' => 'theme',
            'render_template' => 'blocs/course.php'
        ]);
        
        acf_register_block_type([
            'name' => 'studentImageGallery',
            'title' => 'Student Image Gallery',
            'category' => 'theme',
            'render_template' => 'blocs/studentImageGallery.php'
        ]);

        acf_register_block_type([
            'name' => 'mainTitleLead',
            'title' => 'Pages Main Title and Lead Paragraph',
            'category' => 'theme',
            'render_template' => 'blocs/mainTitleLead.php'
        ]);

        acf_register_block_type([
            'name' => 'pattern',
            'title' => 'Decorative pattern',
            'category' => 'theme',
            'render_template' => 'blocs/pattern.php'
        ]);

        acf_register_block_type([
            'name' => 'homeFirstScreen',
            'title' => 'Home 1st Screen',
            'category' => 'theme',
            'render_template' => 'blocs/homeFirstScreen.php'
        ]);

        acf_register_block_type([
            'name' => 'homeCourses',
            'title' => 'Home Courses',
            'category' => 'theme',
            'render_template' => 'blocs/homeCourses.php'
        ]);

        acf_register_block_type([
            'name' => 'featuresBenefits',
            'title' => 'Features & Benefits',
            'category' => 'theme',
            'render_template' => 'blocs/featuresBenefits.php'
        ]);

        acf_register_block_type([
            'name' => 'courseSearch',
            'title' => 'Course Search',
            'category' => 'theme',
            'render_template' => 'blocs/courseSearch.php'
        ]);

        acf_register_block_type([
            'name' => 'courseSlider',
            'title' => 'Course Slider',
            'category' => 'theme',
            'render_template' => 'blocs/courseSlider.php'
        ]);
    });
}

function my_custom_new_menu()
{
    register_nav_menu('nav_menu', __('Menu de navigation'));
}

add_action('init', 'my_custom_new_menu');
