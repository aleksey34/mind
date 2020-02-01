<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package mind
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mind_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'mind_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mind_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'mind_pingback_header' );

// custom change
/**
 * hide admin bar panel except admin
 */
// 21. Disable admin bar for all users but admins in the front end
if(!is_admin()){

	show_admin_bar(false);
}


// 17. Remove WordPress version from Head
function remove_version_from_head()
{
	return '';
}
add_filter('the_generator', 'remove_version_from_head');

// 18. Remove login error message on login page
//add_filter('login_errors',create_function('$a', "return null;"));
add_filter('login_errors', '__return_null' );