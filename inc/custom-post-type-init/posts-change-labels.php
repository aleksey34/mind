<?php


## заменим слово «записи» на «статьи»
//$labels = apply_filters( "post_type_labels_{$post_type}", $labels );
add_filter('post_type_labels_post', 'mind_rename_posts_labels');
function mind_rename_posts_labels( $labels ){
	// заменять автоматически не пойдет например заменили: Запись = Статья, а в тесте получится так "Просмотреть статья"

	/* оригинал
		stdClass Object (
			'name'                  => 'Записи',
			'singular_name'         => 'Запись',
			'add_new'               => 'Добавить новую',
			'add_new_item'          => 'Добавить запись',
			'edit_item'             => 'Редактировать запись',
			'new_item'              => 'Новая запись',
			'view_item'             => 'Просмотреть запись',
			'search_items'          => 'Поиск записей',
			'not_found'             => 'Записей не найдено.',
			'not_found_in_trash'    => 'Записей в корзине не найдено.',
			'parent_item_colon'     => '',
			'all_items'             => 'Все записи',
			'archives'              => 'Архивы записей',
			'insert_into_item'      => 'Вставить в запись',
			'uploaded_to_this_item' => 'Загруженные для этой записи',
			'featured_image'        => 'Миниатюра записи',
			'set_featured_image'    => 'Задать миниатюру',
			'remove_featured_image' => 'Удалить миниатюру',
			'use_featured_image'    => 'Использовать как миниатюру',
			'filter_items_list'     => 'Фильтровать список записей',
			'items_list_navigation' => 'Навигация по списку записей',
			'items_list'            => 'Список записей',
			'menu_name'             => 'Записи',
			'name_admin_bar'        => 'Запись',
		)
	*/

	$new = array(
		'name'                  => 'Заметки',
		'singular_name'         => 'Заметка',
		'add_new'               => 'Добавить Заметку',
		'add_new_item'          => 'Добавить Заметку',
		'edit_item'             => 'Редактировать Заметку',
		'new_item'              => 'Новая Заметка',
		'view_item'             => 'Просмотреть Заметку',
		'search_items'          => 'Поиск Заметок',
		'not_found'             => 'Заметок не найдено.',
		'not_found_in_trash'    => 'Заметок в корзине не найдено.',
		'parent_item_colon'     => '',
		'all_items'             => 'Все Заметки',
		'archives'              => 'Архивы Заметок',
		'insert_into_item'      => 'Вставить в Заметку',
		'uploaded_to_this_item' => 'Загруженные для этой Заметки',
		'featured_image'        => 'Миниатюра Заметки',
		'filter_items_list'     => 'Фильтровать список Заметок',
		'items_list_navigation' => 'Навигация по списку Заметок',
		'items_list'            => 'Список Заметок',
		'menu_name'             => 'Заметки',
		'name_admin_bar'        => 'Заметку', // пункте "добавить"
	);

	return (object) array_merge( (array) $labels, $new );
}