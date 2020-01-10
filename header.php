<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mind
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php  if(is_front_page()) : ?>
        <title>Главная</title>
	<?php   endif; ?>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<link rel="profile" href="https://gmpg.org/xfn/11">-->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
/**
 *
 *  path inc/custom-header.php
 *
 * @hooked  mind_header_open_tags  5    open header
 * @hooked  mind_header_title_desc  10
 * @hooked mind_header_login_reg_notices 20-- moved into login reg modal
 * @hooked mind_header_breadcrumbs , 20
 * @hooked mind_header_the_top_nav_menu 30
 * @hooked mind_header_close_tags 35  close header
 * @hooked  mind_header_cart_btn 40
 * @hooked mind_header_login_reg_modal  50
 */
do_action("mind_header_parts")

?>
