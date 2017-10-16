<?php

add_action('init', 'wp_register_types');
add_theme_support('post-thumbnails');


// Define shortcut path
$css =  get_template_directory_uri() . '/css/main.css';
$images =  get_template_directory_uri() . '/images/';
$scripts =  get_template_directory_uri() . '/scripts/';

// Retrieves the absolute URI for given asset in this theme.
function get_images($src = '') {
  return get_template_directory_uri() . '/images/' . trim($src, '/');
}

// Displays the absolute URI for given asset in this theme.
function theme_asset($src = '') {
  echo get_theme_asset($src);
}

// Disable admin bar
show_admin_bar(false);

function wp_register_types() {

}

// Register menu
register_nav_menu( 'main-nav', __('Menu principal, affiché dans le header.','b') );

// Create items menu
function b_get_menu_id( $location )
{
  $a = get_nav_menu_locations();
  if (isset($a[$location])) return $a[$location];
  return false;
}

function b_get_menu_items( $location )
{
  $navItems = [];
  foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
      $item = new stdClass();
      $item->url = $obj->url;
      $item->label = $obj->title;
      $item->class = $obj->classes[0];
      $item->id = $obj->object_id;
      array_push($navItems, $item);
  }
  return $navItems;
}

// Return a custom excerpt for given length
function ma_get_the_excerpt($length = null) {
    $excerpt = get_the_excerpt();
    if(is_null($length) || strlen($excerpt) <= $length) return $excerpt;
    $string = '';
    $words = explode(' ', $excerpt);
    foreach ($words as $word) {
        //  + 2 is needed in order to include the next space and the &hellip; in the character count.
        if((strlen($string) + strlen($word) + 2) > $length) break;
        $string .= ' ' . $word;
    }
    return trim($string) . '&hellip;';
}

 // Output a custom excerpt for given length
function ma_the_excerpt($length = null) {
    echo ma_get_the_excerpt($length);
}
