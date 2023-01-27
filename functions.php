<?php

/**
 * Theme scripts
 */
function add_theme_scripts()
{
	$theme = wp_get_theme();

	// Styles
	wp_enqueue_style("style", get_template_directory_uri() . "/dist/main.css", array(), $theme->get('version'));

	// Scripts
	wp_enqueue_script("main", get_template_directory_uri() . "/dist/main.js", array('jquery'), $theme->get('version'), true);

	// Agregando Parámetros del sitio a una variable de JS
	require get_template_directory() . '/includes/site-params.php';
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/**
 * Register Theme Features
 */
function danramzdev_theme_features()
{
	// Add theme support for Featured Images
	add_theme_support('post-thumbnails');

	// Set custom thumbnail dimensions
	set_post_thumbnail_size(1500, 1200, true);

	// Add theme support for document Title tag
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'danramzdev_theme_features');

/**
 * Theme extras
 */
require get_template_directory() . '/includes/wordpress-optimize.php';
require get_template_directory() . '/includes/blog-functions.php';
