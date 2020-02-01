<?php
/**
 * front page shortcodes
 */

//intro
add_shortcode( 'front_page_intro', 'front_page_intro_func' );
function front_page_intro_func( $atts ){
	// белый список параметров и значения по умолчанию
//	$atts = shortcode_atts( array(
//		'foo' => 'no foo',
//		'baz' => 'default baz'
//	), $atts );

	ob_start();

	get_template_part('template-parts/front-page/intro-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}

// benefit
add_shortcode( 'front_page_benefits', 'front_page_benefits_func' );
function front_page_benefits_func( $atts ){

	ob_start();

	 get_template_part('template-parts/front-page/benefit-section');


	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}


//news
add_shortcode( 'front_page_news', 'front_page_news_func' );
function front_page_news_func( $atts ){
	ob_start();

get_template_part('template-parts/front-page/news-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}

//posts
add_shortcode( 'front_page_posts', 'front_page_posts_func' );
function front_page_posts_func( $atts ){
	ob_start();

get_template_part('template-parts/front-page/posts-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}

//testimonials
add_shortcode( 'front_page_testimonials', 'front_page_testimonials_func' );
function front_page_testimonials_func( $atts ){
	ob_start();

 get_template_part('template-parts/front-page/testimonials-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}


//products
add_shortcode( 'front_page_products', 'front_page_products_func' );
function front_page_products_func( $atts ){
	ob_start();

  get_template_part('template-parts/front-page/products-section');

	$result =  ob_get_contents();
	ob_end_clean();
	return  $result;
}

//quotes
add_shortcode( 'front_page_quotes', 'front_page_quotes_func' );
function front_page_quotes_func( $atts ){
	ob_start();

 get_template_part('template-parts/front-page/quotes-section');

	$result =  ob_get_contents();
	ob_end_clean();
	return  $result;
}

//teachers
add_shortcode( 'front_page_teachers', 'front_page_teachers_func' );
function front_page_teachers_func( $atts ){
	ob_start();

 get_template_part('template-parts/front-page/teachers-section');

	$result =  ob_get_contents();
	ob_end_clean();
	return  $result;
}

//partners
add_shortcode( 'front_page_partners', 'front_page_partners_func' );
function front_page_partners_func( $atts ){
	ob_start();

 get_template_part('template-parts/front-page/partners-section');

	$result =  ob_get_contents();
	ob_end_clean();
	return  $result;
}

//books
add_shortcode( 'front_page_books', 'front_page_books_func' );
function front_page_books_func( $atts ){
	ob_start();

  get_template_part('template-parts/front-page/books-section');

	$result =  ob_get_contents();
	ob_end_clean();
	return  $result;
}

add_shortcode( 'front_page_map', 'front_page_map_func' );
function front_page_map_func( $atts ){
	ob_start();

 get_template_part('template-parts/front-page/map-section');


	$result =  ob_get_contents();
	ob_end_clean();
	return  $result;
}
