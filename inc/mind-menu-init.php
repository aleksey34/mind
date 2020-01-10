<?php

if(!defined("ABSPATH")) exit;

function mind_menu_init(){

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top_menu'      => esc_html__( 'Primary', 'mind' ),
		"footer_menu"   => esc_html__("Footer Menu" , "mind"),
	) );

}


add_action("after_setup_theme" , "mind_menu_init");

// call top menu  func
function mind_the_top_menu(){
	$args =  [
		'theme_location'  => 'top_menu',
		'menu'            => '',
		'container'       =>  false ,
		'echo'            => true,
	//	'items_wrap'      => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
		'items_wrap'      => '<ul id="%1$s" class="%2$s  mr-auto">%3$s</ul>',
		// 'menu_class'      => 'menu navbar-nav mr-auto',
		'menu_class'      => 'menu nav nav-tabs mr-auto',
		'depth'           => 0,
		'walker'          => new WP_Bootstrap_Navwalker() ,
		'fallback_cb'     => 'wp_page_menu',
		// 'container_class' => '',
		// 'container_id'    => '',
		//  'menu_id'         => '',
		//'before'          => '',
		// 'after'           => '',
		// 'link_before'     =>  "",
		// 'link_after'      => '',
	] ;
	wp_nav_menu($args );
}

// call footer menu
function mind_the_footer_menu(){
	$args =  [
		'theme_location'  => 'footer_menu',
		'container'       =>  false ,
		'echo'            => true,
	] ;
	wp_nav_menu($args );
}
