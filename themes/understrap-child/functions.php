<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
 * Add search box to primary menu
 */
function wpgood_nav_search($items, $args) {
    // If this isn't the primary menu, do nothing
    if( !($args->theme_location == 'primary') ) 
    return $items;
    // Otherwise, add search form
    return $items . '<li>' . get_search_form(false) . '</li>';
}
add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);

// Remove Fields Woocommerce - Checkout Billing Details
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_address_2']);
    
    return $fields;
}


// add_filter( 'woocommerce_default_address_fields', 'ap_reorder_checkout_fields' );
  
// function ap_reorder_checkout_fields( $fields ) {
 
    //  default priorities: 
    //  'first_name' - 10
    //  'last_name' - 20
    //  'company' - 30
    //  'country' - 40
    //  'address_1' - 50
    //  'address_2' - 60
    //  'city' - 70
    //  'state' - 80
    //  'postcode' - 90
  
  // e.g. move 'company' above 'first_name':
  // just assign priority less than 10
//   $fields['company']['priority'] =21;
//   $fields['address_1']['priority'] = 37;
//   $fields['city']['priority'] = 38;
//   $fields['postcode']['priority'] = 39;
 
//   return $fields;
// }


 
