<?php
/*
Theme features
*/

// internationalization

add_action( 'after_setup_theme', 'theme_load_theme_textdomain' );
function theme_load_theme_textdomain() {
    load_theme_textdomain('simple-never-theme', get_template_directory() . '/languages');
}

// register menu
add_action( 'init', 'register_menus' );

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' , 'grid-never-theme')
      //,'extra-menu' => __( 'Extra Menu' )
     )
   );
}

// add custom logo
add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 300,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

?>