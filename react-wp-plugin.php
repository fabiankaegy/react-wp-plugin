<?php
/*
   Plugin Name: React in WP
   Version: 1.0.0
   Description: Template for including React in a Wordpress Plugin
   Text Domain: react-in-wp
   License: GPLv3
*/

defined( 'ABSPATH' ) or die( 'No direct access!' );

function reactwp_scripts() {

  if( is_single( 1794 ) ) {

	  wp_enqueue_script(
		  'reactwp-main-js',
		  plugins_url( '/assets/js/main.js', __FILE__ ),
		  ['wp-element'],
		  time(),
		  true
	  );
  }
}
add_action( 'wp_enqueue_scripts', 'reactwp_scripts' );


function reactwp_styles() {

  // Register the CSS like this for a plugin:
  wp_enqueue_style(
    'reactwp-main-css',
    plugins_url( '/assets/css/main.css', __FILE__ ),
    [],
    time(),
    'all'
  );

}
add_action( 'wp_enqueue_scripts', 'reactwp_styles' );

?>
