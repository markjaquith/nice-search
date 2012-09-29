=== Nice Search ===
Contributors: markjaquith
Donate link: http://txfx.net/wordpress-plugins/donate
Tags: redirect, canonical, search
Requires at least: 3.3
Tested up to: 3.5
Stable tag: 0.5

Redirects search URLs from ?s=FOO  to /search/foo and converts spaces to + symbols

== Description ==

This simple plugin (no configuration) redirects `?s=FOO` search URLs to the nicer `/search/FOO` versions. Requires pretty permalinks.

== Installation ==

1. Upload the `nice-search` folder to your `/wp-content/plugins/` directory
2. Activate the "Nice Search" plugin in your WordPress administration interface
3. Done!

== Frequently Asked Questions ==

= Does this work with PATHINFO (index.php) permalinks? =

Yes.

== Changelog ==

= 0.5 =
* Respect custom `$wp_rewrite->search_base` values

= 0.4 =
* Properly handle urlencoded characters (non-English languages: you want this!)
* Include a hotfix for WordPress ticket [#13961](http://core.trac.wordpress.org/ticket/13961), which enables the above fix to work.
* Use proper WP API functions (enables PATHINFO permalinks)

= 0.3 =
* First version in repository