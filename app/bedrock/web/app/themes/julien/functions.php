<?php

function julien_supports()
{
    add_theme_support('title-tag');
}

function julien_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', [], false, true);
    wp_deregister_style('jquery');
    wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function julien_title_separator($title)
{
    return '|';
}

function julien_document_title_parts($title)
{
    var_dump($title);
    die;
}

add_action('after_setup_theme', 'julien_supports');
add_action('wp_enqueue_scripts', 'julien_register_assets');
add_filter('document_title_separator', 'julien_title_separator');
add_filter('document_title_parts', 'julien_document_title_parts');
