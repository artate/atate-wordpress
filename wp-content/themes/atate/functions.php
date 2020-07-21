<?php
require_once('includes/components.php');
require_once('includes/core-updates.php');

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );

function add_first_and_last($items) {
  $items[1]->classes[] = 'first-menu-item';
  $items[count($items)]->classes[] = 'last-menu-item';
  return $items;
}
add_filter('wp_nav_menu_objects', 'add_first_and_last');

//Remove comments from backend nav
function remove_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus' );
?>