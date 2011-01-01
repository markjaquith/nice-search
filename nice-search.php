<?php
/*
Plugin Name: Nice Search
Version: 0.3
Plugin URI: http://txfx.net/wordpress-plugins/nice-search/
Description: Redirects ?s=query searches to /search/query, and converts %20 to +
Author: Mark Jaquith
Author URI: http://coveredwebservices.com/
*/

function cws_nice_search_redirect() {
	if ( is_search() && strpos( $_SERVER['REQUEST_URI'], '/wp-admin/' ) === false && strpos( $_SERVER['REQUEST_URI'], '/search/' ) === false ) {
		wp_redirect( home_url( '/search/' . str_replace( array( ' ', '%20' ),  array( '+', '+' ), get_query_var( 's' ) ) ) );
		exit();
	}
}

add_action( 'template_redirect', 'cws_nice_search_redirect' );
