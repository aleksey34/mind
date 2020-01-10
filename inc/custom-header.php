<?php
 if(!defined("ABSPATH")) exit;

/**
 *
 *  path inc/custom-header.php
 *
 * @hooked  mind_header_open_tags  5    open header
 * @hooked  mind_header_title_desc  10
 * @hooked mind_header_login_reg_notices 20 // replace into mind_header_login_reg_modal
 * @hooked mind_header_the_top_nav_menu 30
 * @hooked mind_header_close_tags 35  close header
 * @hooked  mind_header_cart_btn 40
 * @hooked mind_header_login_reg_modal  50
 */
add_action("mind_header_parts" , "mind_header_open_tags" , 5);
add_action("mind_header_parts" , "mind_header_title_desc" , 10);
add_action("mind_header_parts" , "mind_header_breadcrumbs" , 20);

//add_action("mind_header_parts" , "mind_header_login_reg_notices" , 20);
add_action("mind_header_parts" , "mind_header_the_top_nav_menu" , 30);
add_action("mind_header_parts" , "mind_header_close_tags" , 35);
add_action("mind_header_parts" , "mind_header_cart_btn" , 40);
add_action("mind_header_parts" , "mind_header_login_reg_modal" , 50);
add_action("mind_header_parts" , "mind_header_search_form_modal" , 55);

function mind_header_open_tags(){
	get_template_part("template-parts/header/header-open-tags");
}


function mind_header_title_desc(){
    get_template_part("template-parts/header/header-title-desc");
}

function mind_header_breadcrumbs(){
	get_template_part("template-parts/header/header-breadcrumbs");
}

//function mind_header_login_reg_notices(){
//	get_template_part("template-parts/header/header-login-reg-notices");
//
//}

function mind_header_the_top_nav_menu(){
	get_template_part("template-parts/header/header-the-top-nav-menu");

}

function mind_header_close_tags(){
	get_template_part("template-parts/header/header-close-tags");

}

function mind_header_cart_btn(){
	get_template_part("template-parts/header/header-cart-btn");

}

function mind_header_login_reg_modal(){
	get_template_part("template-parts/header/header-login-reg-modal");

	get_template_part("template-parts/header/header-login-reg-notices");


}

function mind_header_search_form_modal(){
	get_template_part("template-parts/header/header-search-form");
}
