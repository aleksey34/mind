<?php
/**
 *  my account active class adding
 */
add_filter( "woocommerce_account_menu_item_classes" , "mind_my_account_navigation_add_active_class" , 50 , 2);
function mind_my_account_navigation_add_active_class($classes , $endpoint){
global  $wp;
	// Set current item class.
	$current = isset( $wp->query_vars[ $endpoint ] );
	if ( 'dashboard' === $endpoint && ( isset( $wp->query_vars['page'] ) || empty( $wp->query_vars ) ) ) {
		$current = true; // Dashboard is not an endpoint, so needs a custom check.
	} elseif ( 'orders' === $endpoint && isset( $wp->query_vars['view-order'] ) ) {
		$current = true; // When looking at individual order, highlight Orders list item (to signify where in the menu the user currently is).
	}
	if ( $current ) {
		$classes[] = 'active';
	}
	return $classes;
}

// change translate Woo
add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
	$translated = str_ireplace('Подытог', 'Итого', $translated);
	$translated = str_ireplace('Таблица размеров', 'Характеристики', $translated);
	$translated = str_ireplace('Хит продаж', 'Хит', $translated);
	$translated = str_ireplace('О бренде', 'О производителе', $translated);
	$translated = str_ireplace('Новый', 'Новинка', $translated);
	$translated = str_ireplace('В корзину', 'Оставить Заявку', $translated);
	$translated = str_ireplace('The cart is empty', 'Заявок еще нет.', $translated);
	//$translated = str_ireplace('Просмотр корзины', 'Просмотр заявки', $translated);

	// for rating text
	$translated = str_ireplace('отзыва клиентов', 'отзыва', $translated);
	return $translated;
}

/**
 * remove action for breadcrumb
 * breadcrumbs show in header
 */
remove_action("woocommerce_before_main_content" , "woocommerce_breadcrumb" , 20);