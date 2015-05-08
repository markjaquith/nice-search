<?php
/*
Plugin Name: Nice Search
Version: 0.6.0-beta-1
Plugin URI: http://txfx.net/wordpress-plugins/nice-search/
Description: Redirects ?s=query searches to /search/query, and converts %20 to +
Author: Mark Jaquith
Author URI: http://coveredwebservices.com/
*/

function cws_nice_search_redirect() {
	global $wp_rewrite;
	if ( ! isset( $wp_rewrite ) || ! is_object( $wp_rewrite ) || ! $wp_rewrite->using_permalinks() ) {
		// Sorry, this plugin isn't going to work on this site
		return;
	}

	$search_base = $wp_rewrite->search_base;
	if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], "/{$search_base}/" ) === false ) {
		wp_redirect( home_url( "/{$search_base}/" . urlencode( get_query_var( 's' ) ) ) );
		exit();
	}
}

add_action( 'template_redirect', 'cws_nice_search_redirect' );
