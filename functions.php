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

// register footer widgets zones
add_action( 'widgets_init', 'grid_never_widgets_init' );

function grid_never_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Footer Zone', 'grid-never-theme' ),
        'id'            => 'footer-wigdets-zone-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Center Footer Zone', 'grid-never-theme' ),
        'id'            => 'footer-wigdets-zone-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Right Footer Zone', 'grid-never-theme' ),
        'id'            => 'footer-wigdets-zone-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Header Zone', 'grid-never-theme' ),
        'id'            => 'header-wigdets-zone-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );    
    register_sidebar( array(
        'name'          => __( 'Header Info Zone', 'grid-never-theme' ),
        'id'            => 'header-wigdets-zone-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );    
}


?>