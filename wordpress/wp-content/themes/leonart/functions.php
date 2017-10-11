<?php

add_action('init', 'la_register_types');
add_filter('wp_title', 'custom_wp_title');
register_nav_menu('header', 'La navigation principale du site.');
add_theme_support('post-thumbnails');

// Define shortcut path
$css =  get_template_directory_uri() . '/css/main.css';
$images =  get_template_directory_uri() . '/images/';
$scripts =  get_template_directory_uri() . '/scripts/';

// Retrieves the absolute URI for given asset in this theme.
function get_images($src = '') {
  return get_template_directory_uri() . '/images/' . trim($src, '/');
}

// Disable admin bar
show_admin_bar(false);

// Displays the absolute URI for given asset in this theme.
function theme_asset($src = '') {
  echo get_theme_asset($src);
}
