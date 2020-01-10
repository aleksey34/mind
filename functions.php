<?php
/**
 * mind functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mind
 */


/**
 * Carbon fields init  --- remove - think to change to ACF
 */
require_once  get_template_directory() . "/inc/carbon-fields-init.php";



/**
 * add theme settings
 */
require_once get_template_directory() . "/inc/theme-settings.php";


/**
 * menu init
 */
require_once get_template_directory() . "/inc/mind-menu-init.php";

/**
 * enqueue  styles and scripts
 */
require_once get_template_directory() . "/inc/mind-style-script.php";



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require_once  get_template_directory() . "/inc/mind-widget-init.php" ;



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Implement the Custom footer feature.
 */
require get_template_directory() . '/inc/custom-footer.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer  settings .
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Add TGM settings.
 */
require get_template_directory() . '/inc/TGM-settings.php';


/**
 * helpers -- functions for dev.
 */
require get_template_directory() . '/inc/mind_helpers.php';


/**
 * handler  ajax
 */
require get_template_directory() . '/inc/ajax.php';


/**
 *init nav walker for top nav menu - b4
 */
require get_template_directory() . '/inc/nav-walker-bootstrap-init.php';



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 *
 * wp auth page logo and link custom
 */
require_once get_template_directory() . "/inc/mind_wp_auth_page_logo_custom.php";

/**
 * change admin page
 * --- change top icon wordpress
 * --- remove copyright wordpress in footer
 */
require_once  get_template_directory() . "/inc/mind_setting_view_admin_page.php" ;



/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';

	require_once  get_template_directory() . "/woocommerce/includes/wc-functions.php";
	require_once  get_template_directory() . "/woocommerce/includes/wc-functions-remove.php";
	require_once  get_template_directory() . "/woocommerce/includes/wc-functions-cart.php";
	require_once  get_template_directory() . "/woocommerce/includes/wc-functions-checkout.php";
	require_once  get_template_directory() . "/woocommerce/includes/wc-functions-single-product.php";
	//require_once  get_template_directory() . "/woocommerce/includes/wc-functions-archive-product.php";


}


/**
 * register custom post type
 */
require_once  get_template_directory() . "/inc/custom-post-type-init/news-init.php";
require_once  get_template_directory() . "/inc/custom-post-type-init/freebie-init.php";
require_once  get_template_directory() . "/inc/custom-post-type-init/testimonials-init.php";
require_once  get_template_directory() . "/inc/custom-post-type-init/teachers-init.php";
// change label post type - post  -- заметки
require_once  get_template_directory() . "/inc/custom-post-type-init/posts-change-labels.php";

/**
 * Gutenberg Register Custom Blocks
 */
//require_once  get_template_directory() . "/gutenberg/init_custom_gutenberg_block_alerts.php";

