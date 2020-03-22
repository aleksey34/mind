<?php
//namespace Carbon_Fields;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// переодически падает
// что делал - обновил компосер - сам карбон филлд
// добавил нэймспэйс на этой странице -- заработало
// закоментировал - все равно работает
//  проблема неясна!
// нэймсэйс оставил - посмотрим -будет падать или нет!!
//


//
//add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
//function crb_attach_theme_options() {
//	Container::make( 'theme_options', __( 'Theme Options' ) )
//	         ->add_fields( array(
//		         Field::make( 'text', 'crb_text', 'Text Field' ),
//	         ) );
//}
//
//add_action( 'after_setup_theme', 'crb_load' );
//function crb_load() {
//	require_once( get_template_directory().'/inc/carbon-fields/vendor/autoload.php' );
//	\Carbon_Fields\Carbon_Fields::boot();
//}




add_action( 'after_setup_theme', 'crb_load'  );

function crb_load() {
	require_once( get_template_directory() . '/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

// add fields
add_action( 'carbon_fields_register_fields', 'mind_register_custom_fields' );
function mind_register_custom_fields() {

//	require_once  get_template_directory() . "/inc/carbon-custom-fields-options/theme-option.php";
	require_once  get_template_directory() . "/inc/carbon-custom-fields-options/metabox.php";

}


