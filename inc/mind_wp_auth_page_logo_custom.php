<?php
if(!defined("ABSPATH")) exit();

/**
 *
 * wp auth page logo and link custom
 */
function mind_wp_auth_page_logo_custom(){
	?>
	<style type="text/css">
		.login #login h1 a{
			background: transparent url("<?php echo get_template_directory_uri().'/assets/img/home.svg' ;  ?>")  50% 50% / contain no-repeat !important;
			width: 160px !important;
			height: 160px !important;
			cursor: pointer;
			box-shadow: 0px 0px 15px 20px rgba(0 , 0 , 0 , 0.09);
			border-radius: 50%;
		}
	</style>
	<?php
}
add_action("login_enqueue_scripts" , "mind_wp_auth_page_logo_custom");
function mind_wp_auth_page_logo_link($url){
	return home_url("/");
}
add_filter("login_headerurl" , "mind_wp_auth_page_logo_link" , 50);




