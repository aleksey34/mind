<?php
/**
 * mind Theme Customizer
 *
 * @package mind
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mind_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';


	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			//'selector'        => '.site-title a',
			'selector'        => '.site-title',
			'render_callback' => 'mind_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'mind_customize_partial_blogdescription',
		) );


	}
}
add_action( 'customize_register', 'mind_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mind_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function mind_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
//function mind_customize_partial_blogicon(){
//	echo get_template_directory_uri(). "/assets/img/home.svg";
//}

// BG
function mind_customize_partial_blogbackground(){
echo 	"<style>
body{background: fixed url('".get_theme_mode('blogbackground')."'} repeat;
	</style>";
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mind_customize_preview_js() {
	wp_enqueue_script( 'mind-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mind_customize_preview_js' );


//-----------------------------------------------------FOOTER
/**
 * setting footer
 */
function mind_customize_register_footer($wp_customize){

	$wp_customize->add_section("footer_settings" , array(
		"title"=> esc_html__("Footer Settings" , "mind"),
		"priority"=> 27
	));




	$wp_customize->add_setting("footer_about_us_content" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );
	$wp_customize->add_setting("footer_about_us_column_title" , array(
		"default"=> "about us",
		"transport"=> "postMessage"
	) );
	// footer menu middle column
	$wp_customize->add_setting("footer_menu_column_title" , array(
		"default"=> "footer menu",
		"transport"=> "postMessage"
	) );

	// contact footer sectoin
	$wp_customize->add_setting("footer_contact_column_title" , array(
		"default"=> "our contact",
		"transport"=> "postMessage"
	) );

	$wp_customize->add_setting("footer_contact_email" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );

	$wp_customize->add_setting("footer_contact_phone" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );

	$wp_customize->add_setting("footer_contact_skype" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );

	$wp_customize->add_setting("footer_contact_address" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );



	$wp_customize->add_setting("footer_copyright" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );

// add icon for change for customizer

	// copyright
	$wp_customize->selective_refresh->add_partial(
		'footer_copyright', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.site-footer-copyright',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_copyright"); // echo is important!!!
			}
		]
	);

	// about us



	$wp_customize->selective_refresh->add_partial(
		'footer_about_us_content', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-about-us_content',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_about_us_content"); // echo is important!!!
			}
		]
	);

	$wp_customize->selective_refresh->add_partial(
		'footer_about_us_column_title', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-about-us_title',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_about_us_column_title"); // echo is important!!!
			}
		]
	);
// end about us

	// footer menu  middle column
	$wp_customize->selective_refresh->add_partial(
		'footer_menu_column_title', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-menu-title',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_menu_column_title"); // echo is important!!!
			}
		]
	);


	// end footer menu
// contact
	$wp_customize->selective_refresh->add_partial(
		'footer_contact_column_title', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-contact-title',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_contact_column_title"); // echo is important!!!
			}
		]
	);

	$wp_customize->selective_refresh->add_partial(
		'footer_contact_email', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-contact-email',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_contact_email"); // echo is important!!!
			}
		]
	);

	$wp_customize->selective_refresh->add_partial(
		'footer_contact_phone', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-contact-phone',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_contact_phone"); // echo is important!!!
			}
		]
	);

	$wp_customize->selective_refresh->add_partial(
		'footer_contact_address', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-contact-address',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_contact_address"); // echo is important!!!
			}
		]
	);

	$wp_customize->selective_refresh->add_partial(
		'footer_contact_skype', // идентификатор настройки
		[
			// CSS-селектор контейнера, который будет обновляться
			'selector' => '.footer-contact-skype',
			// функция генерирует контент для контейнера #blogname
			'render_callback' => function() {
				echo get_theme_mod("footer_contact_skype"); // echo is important!!!
			}
		]
	);



// end contact

	// end add icon for change settings


	// section about us controls


	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_about_us_title", array(
		"label"=> __("Footer About Us Column Title" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_about_us_column_title",
		"type"=> "text"
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_about_us_content", array(
		"label"=> __("Footer About Us Content" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_about_us_content",
		"type"=> "textarea"
	)));



	// section  footer menu
	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_menu_column_title", array(
		"label"=> __("Footer Menu Title" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_menu_column_title",
		"type"=> "text"
	)));


	// section contacts
	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_contact_column_title", array(
		"label"=> __("Footer Address Column Title" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_contact_column_title",
		"type"=> "text"
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_contact_email", array(
		"label"=> __("Footer Contact Email" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_contact_email",
		"type"=> "text"
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_contact_phone", array(
		"label"=> __("Footer Contact Phone" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_contact_phone",
		"type"=> "text"
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_contact_address", array(
		"label"=> __("Footer Contact Address" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_contact_address",
		"type"=> "text"
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_contact_address", array(
		"label"=> __("Footer Contact Skype" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_contact_skype",
		"type"=> "text"
	)));

// copyright
	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "footer_copyright", array(
		"label"=> __("Footer Copyright" , "mind"),
		"section"=> "footer_settings" ,
		"settings"=> "footer_copyright",
		"type"=> "textarea"
	)));



}
add_action("customize_register" , "mind_customize_register_footer");

//------------------------------------END FOOTER



//---------------------------ABS
/**
 * setting customizer
 */
function mind_customize_register_ads($wp_customize){

	$wp_customize->add_section("ads" , array(
		"title"=> esc_html__("Advertising" , "mind"),
		"priority"=> 30
	));

	$wp_customize->add_setting("ads_code" , array(
		"default"=> "",
		"transport"=> "postMessage"
	) );

	$wp_customize->add_control(new WP_Customize_Control($wp_customize , "ads_code", array(
		"label"=> __("Ваш рекламный код" , "mind"),
		"section"=> "ads" ,
		"settings"=> "ads_code",
		"type"=> "textarea"
	)));
}
add_action("customize_register" , "mind_customize_register_ads");
// ---------------------------------END ABS


