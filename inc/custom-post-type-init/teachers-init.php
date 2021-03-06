<?php

add_action( 'init', 'register_post_types_teachers' );
function register_post_types_teachers(){
	register_post_type('teachers', array(
		'label'  => esc_html__("Teachers" , 'mind'),
		'labels' => array(
			'name'               => esc_html__("Teachers" , "mind"), // основное название для типа записи
			'singular_name'      => esc_html__("Teacher" , "mind"), // название для одной записи этого типа
			'add_new'            => __("Add Teacher" , 'mind') , // для добавления новой записи
			'add_new_item'       =>  __("Add New Teacher" , 'mind') , // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          =>  __("Edit Teacher" , 'mind') , // для редактирования типа записи
			'new_item'           =>  __("New Teacher" , 'mind') , // текст новой записи
			'view_item'          =>  __("Show Teacher" , 'mind') , // для просмотра записи этого типа.
			'search_items'       =>  __("Search Teacher" , 'mind') , // для поиска по этим типам записи
			'not_found'          =>  __("Not Found" , 'mind') ,'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' =>  __("Not fount in trash" , 'mind') , // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          =>  esc_html__("Teachers" , "mind"), // название меню
		),
		'description'         => '',
		'public'              => false,
// 'publicly_queryable'  => null, // зависит от public
// 'exclude_from_search' => null, // зависит от public
		'show_ui'             => true, // зависит от public
// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => "dashicons-businessman",
//'capability_type'   => 'post',
//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail','custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}

// add taxonomy
add_action( 'init', 'register_taxonomy_for_teachers' );
function  register_taxonomy_for_teachers(){

	register_taxonomy('personal_role', array('teachers'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => _x( 'Personal Roles', 'taxonomy general name' , 'mind' ),
			'singular_name'     => _x( 'Personal Role', 'taxonomy singular name', 'mind' ),
			'search_items'      =>  __( 'Search Personal Roles', 'mind' ),
			'all_items'         => __( 'All Personal Roles' , 'mind' ),
			'parent_item'       => __( 'Parent Personal Role', 'mind' ),
			'parent_item_colon' => __( 'Parent Personal Role:', 'mind' ),
			'edit_item'         => __( 'Edit Personal Role', 'mind' ),
			'update_item'       => __( 'Update Personal Role' , 'mind'),
			'add_new_item'      => __( 'Add New Personal Role', 'mind' ),
			'new_item_name'     => __( 'New Personal Role Name' , 'mind'),
			'menu_name'         => __( 'Personal Role', 'mind' ),
		),
		'show_ui'       => true,
		'query_var'     => true,


		// параметры связанные с REST  !important!!
		'show_in_rest'          => true,
		'rest_base'             => 'personal_role',
		'rest_controller_class' => 'WP_REST_Terms_Controller',


		//'rewrite'       => array( 'slug' => 'the_genre' ), // свой слаг в URL
	));
}