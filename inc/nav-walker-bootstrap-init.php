<?php
/**
* Register Custom Navigation Walker
*/
//function mind_register_navwalker(){
//require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
//}
//add_action( 'after_setup_theme', 'mind_register_navwalker' );

if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

	function mind_register_navwalker(){
		require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
	}
	add_action( 'after_setup_theme', 'mind_register_navwalker' );
}

