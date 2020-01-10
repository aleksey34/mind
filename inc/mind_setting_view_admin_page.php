<?php
/**
 * remove copyright in  footer of admin page
 * hide with style  footer upgrade version
 */
function mind_admin_remove_copyright_wordpress(){
echo   '<style>#footer-upgrade{display:none;} </style><span id="footer-thankyou">Мы верим что вам поможет<a href="'.home_url("/").'"> наш сайт </a>.</span><br/>All rights are reserved. This theme was created by our team.' ;
}
add_filter( "admin_footer_text" , "mind_admin_remove_copyright_wordpress" );

//add_filter("", "");


/**
 * change top icon wordpress
 */
function mind_admin_change_toolbar(){
global  $wp_admin_bar;

$wp_admin_bar->add_menu(array(
	"id"=>"mind_admin_top_icon",
	"title"=>'<img title="Themes" style="width:18px;padding: 0 0 0 0;margin:auto;" src="'.get_template_directory_uri()."/assets/img/home.svg".'"/>' , //"&nbsp;" ,
	"href"=> esc_url(admin_url("/themes.php")),
	'meta'   => array(   // Массив дополнительных данных элемента. По умолчанию: пустой массив.
	//	'html'     => '<img style="z-index:0;width:18px;position:absolute;top:5px;left:1px;padding:0 2px 0 2px;" src="'.get_template_directory_uri()."/assets/img/home.svg".'"/>', // Произвольный HTMl код, который будет добавлен в конце оборачивающего LI тега элемента меню.
		//'class'    => '', // Атрибут тега 'class'
		//'rel'      => '', // Атрибут тега 'rel'
		//'lang'     => '', // Атрибут тега 'lang'
		//'dir'      => '', // Атрибут тега 'dir'
		//'onclick'  => '', // Атрибут тега 'onclick'
		//'target'   => '', // Атрибут тега 'target'
		//'title'    => 'Themes', // Атрибут тега 'title'
		//'tabindex' => '', // Атрибут тега 'tabindex'
	),
));

$wp_admin_bar->remove_node("wp-logo");

}
add_action("admin_bar_menu" , "mind_admin_change_toolbar" , 40);