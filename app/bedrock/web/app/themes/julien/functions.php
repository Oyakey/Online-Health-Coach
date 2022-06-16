<?php

namespace App;

function supports(){
	add_theme_support('title-tag');
}

function register_assets(){
	wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
	wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', ['popper', 'jquery'], false, true);
	wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js', [], false, true);
	wp_deregister_style('jquery');
	wp_register_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery', [], false, true);
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_script('bootstrap');
}

add_action('after_setup_theme', 'App\supports');
add_action('wp_enqueue_scripts', 'App\register_assets');
?>