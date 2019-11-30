<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
	define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
	define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/

/*function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );*/

add_theme_support( 'post-thumbnails' );

// Archieve product WOOF Filter Zone
function archieve_filter_widget_init() {
    register_sidebar(array(
        'name' =>   __( 'Filter sidebar', 'test theme' ),
        'id' =>     'filter_sidebar',
        'description' => __( 'This will appear on archive products page as filter sidebar', 'test theme' )
    ) );
} 
add_action( 'widgets_init', 'archieve_filter_widget_init' );

// Custom menues
function wp_header_top_left() {
	register_nav_menu('header_top_left',__( 'Header top-left' ));
}
add_action( 'init', 'wp_header_top_left' );

function wp_header_top_right(){
	register_nav_menu('header_top_right',__('Header top-right'));
}
add_action( 'init', 'wp_header_top_right');



// Excerpt
function wp_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wp_excerpt_length', 999 );