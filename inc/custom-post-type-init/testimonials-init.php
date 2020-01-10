<?php

add_action( 'init', 'register_post_types_testimonials' );
function register_post_types_testimonials(){
register_post_type('testimonials', array(
'label'  => esc_html__("Testimonials" , 'mind'),
'labels' => array(
'name'               => esc_html__("Testimonials" , "mind"), // основное название для типа записи
'singular_name'      => esc_html__("Testimonial" , "mind"), // название для одной записи этого типа
'add_new'            => 'Добавить Отзыв', // для добавления новой записи
'add_new_item'       => 'Добавление Отзыва', // заголовка у вновь создаваемой записи в админ-панели.
'edit_item'          => 'Редактирование Отзыва', // для редактирования типа записи
'new_item'           => 'Новой Отзыв', // текст новой записи
'view_item'          => 'Смотреть Отзыв', // для просмотра записи этого типа.
'search_items'       => 'Искать Отзыв', // для поиска по этим типам записи
'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
'parent_item_colon'  => '', // для родителей (у древовидных типов)
'menu_name'          =>  esc_html__("Testimonials" , "mind"), // название меню
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
'menu_icon'           => 'dashicons-testimonial',
//'capability_type'   => 'post',
//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
'hierarchical'        => false,
'supports'            => [ 'title', 'editor', 'thumbnail','custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
'taxonomies'          => [],
'has_archive'         => false,
'rewrite'             => true,
'query_var'           => true,
) );
}