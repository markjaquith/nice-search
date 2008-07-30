<?php
/*
Plugin Name: Nice Search
Version: 0.3-beta-1
Plugin URI: http://txfx.net/code/wordpress/nice-search/
Description: Redirects ?s=query searches to /search/query, and converts %20 to +
Author: Mark Jaquith
Author URI: http://coveredwebservices.com/
*/

function txfx_nice_search() {
	if ( is_search() && strpos( $_SERVER['REQUEST_URI'], '/wp-admin/' ) === false && strpos( $_SERVER['REQUEST_URI'], '/search/' ) === false ) {
		wp_redirect( get_bloginfo( 'home' ) . '/search/' . str_replace( ' ', '+', str_replace( '%20', '+', get_query_var( 's' ) ) ) );
		exit();
	}
}

add_action('template_redirect', 'txfx_nice_search');

?>