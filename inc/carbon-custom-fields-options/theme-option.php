<?php
namespace  Carbon_Fields;
if(!defined("ABSPATH")) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', __( 'Theme Options' ) )
	->set_icon("dashicons-admin-generic")
	->add_tab( __( "Header" , "mind" ), array(
		Field::make( 'image', 'mind_header_logo_image', __( 'Logo Image' , "mind" ) ),
		Field::make( 'text', 'mind_site_name', __( 'Site Name' , "mind" ) ),
		Field::make( 'text', 'mind_site_desc', __( 'Site Description' , "mind" ) ),

		Field::make( 'color', 'mind_header_background_color', __( 'Header Background Color' , "mind" ) )
			->set_width(40),
		Field::make( 'image', 'mind_header_background_img', __( 'Header Background Image' , "mind" ) )
			->set_width(40),
		Field::make( 'checkbox', 'mind_header_background_repeat', __( 'Background repeat or not ?' , "mind" ) )
			->set_width(20),

	) )
	->add_tab( __( 'Footer' , "mind" ), array(
		Field::make( 'text', 'crb_email', __( 'Notification Email' ) ),
		Field::make( 'text', 'crb_phone', __( 'Phone Number' ) ),
	) );








// example

//Container::make( 'theme_options', __( 'Theme Options' ) )
//         ->add_fields( array(
//	         Field::make( 'text', 'crb_text', 'Text Field' ),
//         ) );



//$basic_options_container = Container::make( 'theme_options', __( 'Basic Options' ) )
//                                    ->add_fields( array(
//	                                    Field::make( 'header_scripts', 'crb_header_script', __( 'Header Script' ) ),
//	                                    Field::make( 'footer_scripts', 'crb_footer_script', __( 'Footer Script' ) ),
//                                    ) );

// Add second options page under 'Basic Options'
//Container::make( 'theme_options', __( 'Social Links' ) )
//         ->set_page_parent( $basic_options_container ) // reference to a top level container
//         ->add_fields( array(
//		Field::make( 'text', 'crb_facebook_link', __( 'Facebook Link' ) ),
//		Field::make( 'text', 'crb_twitter_link', __( 'Twitter Link' ) ),
//	) );

// Add third options page under "Appearance"
//Container::make( 'theme_options', __( 'Customize Background' ) )
//         ->set_page_parent( 'themes.php' ) // identificator of the "Appearance" admin section
//         ->add_fields( array(
//		Field::make( 'color', 'crb_background_color', __( 'Background Color' ) ),
//		Field::make( 'image', 'crb_background_image', __( 'Background Image' ) ),
//	) );