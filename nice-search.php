<?php
/*
Plugin Name: Nice Search
Version: 0.4-beta
Plugin URI: http://txfx.net/wordpress-plugins/nice-search/
Description: Redirects ?s=query searches to /search/query, and converts %20 to +
Author: Mark Jaquith
Author URI: http://coveredwebservices.com/
*/

function cws_nice_search_redirect() {
	if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], '/search/' ) === false ) {
		wp_redirect( home_url( '/search/' . urlencode( get_query_var( 's' ) ) ) );
		exit();
	}
}

add_action( 'template_redirect', 'cws_nice_search_redirect' );
