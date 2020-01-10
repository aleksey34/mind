<?php
if(!defined("ABSPATH")){
	exit;
}

if ( ! function_exists( 'mind_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mind_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mind, use a find and replace
		 * to change 'mind' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mind', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mind_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}


	/**
	 * end of exerpt for  the_exerpt();
	 */
	add_filter('excerpt_more', function($more) {
		return ' ...';
	});



// in header img or video
//	add_theme_support( 'custom-header', array(
//		'video' => true,
//	) );
// remove admin sidebar in top site
//	add_theme_support( 'admin-bar', [ 'callback'=>'__return_false' ] );
//	add_theme_support( 'yoast-seo-breadcrumbs' ); // Хлебные крошки Yoast SEO
endif;
add_action( 'after_setup_theme', 'mind_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mind_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mind_content_width', 640 );
}
add_action( 'after_setup_theme', 'mind_content_width', 0 );



/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
if(class_exists("WooCommerce")){

	function mind_woocommerce_setup() {
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
	add_action( 'after_setup_theme', 'mind_woocommerce_setup' );

}

/**
 * add gutnberg for all custom type
 */
//add_action( 'after_setup_theme', 'mind_qutenber_add' );
//function mind_qutenber_add(){
//
//	add_theme_support( 'align-wide' );
//	add_theme_support( 'editor-color-palette', [
//		[
//			'name'  => __( 'strong magenta', 'domain' ),
//			'slug'  => 'strong-magenta',
//			'color' => '#a156b4',
//		],
//		[
//			'name'  => __( 'light grayish magenta', 'domain' ),
//			'slug'  => 'light-grayish-magenta',
//			'color' => '#d0a5db',
//		],
//		[
//			'name'  => __( 'very light gray', 'domain' ),
//			'slug'  => 'very-light-gray',
//			'color' => '#eee',
//		],
//		[
//			'name'  => __( 'very dark gray', 'domain' ),
//			'slug'  => 'very-dark-gray',
//			'color' => '#444',
//		],
//	] );
//	add_theme_support( 'disable-custom-colors' );
//	add_theme_support( 'editor-font-sizes', [
//		[
//			'name'      => 'My Small',
//			'shortName' => 'S',
//			'size'      => 12,
//			'slug'      => 'small'
//		],
//		[
//			'name'      => 'My Regular',
//			'shortName' => 'M',
//			'size'      => 16,
//			'slug'      => 'regular'
//		],
//		[
//			'name'      => 'My Large',
//			'shortName' => 'L',
//			'size'      => 20,
//			'slug'      => 'large'
//		],
//		[
//			'name'      => 'My Larger',
//			'shortName' => 'XL',
//			'size'      => 24,
//			'slug'      => 'larger'
//		]
//	] );
//
//	add_theme_support( 'disable-custom-font-sizes' );
//
//	add_theme_support( 'editor-styles' ); // обязателен для работы следующей строки
//	add_theme_support( 'dark-editor-style' );
//
//	add_theme_support( 'wp-block-styles' );
//
//	add_theme_support( 'responsive-embeds' );
//}