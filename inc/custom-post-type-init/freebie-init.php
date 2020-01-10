<?php

add_action( 'init', 'register_post_types_freebie' );
function register_post_types_freebie(){
	register_post_type('freebie', array(
		'label'  => esc_html__("Freebie" , 'mind'),
		'labels' => array(
			'name'               => esc_html__("Freebie" , "mind"), // основное название для типа записи
			'singular_name'      => esc_html__("Freebie" , "mind"), // название для одной записи этого типа
			'add_new'            => 'Добавить Бесплатный Материал', // для добавления новой записи
			'add_new_item'       => 'Добавление Бесплатный Материала', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Бесплатный Материала', // для редактирования типа записи
			'new_item'           => 'Новоя Бесплатный Материал', // текст новой записи
			'view_item'          => 'Смотреть Бесплатный Материал', // для просмотра записи этого типа.
			'search_items'       => 'Искать Бесплатный Материал', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          =>  esc_html__("Freebie" , "mind"), // название меню
		),
		'description'         => '',
		'public'              => true,
// 'publicly_queryable'  => null, // зависит от public
// 'exclude_from_search' => null, // зависит от public
		'show_ui'             => true, // зависит от public
// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'       => true, // add gutenberg for this post type
		//'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-carrot',
//'capability_type'   => 'post',
//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail','custom-fields', 'comments','author','excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,

	) );
}