<?php
/**
 * front page shortcodes
 */

// this for section products, new, posts , testimonials , teachers - only
function mind_front_page_get_section_title_subtitle_part($title = '',$subtitle='', $crb_title_field_name , $crb_subtitle_field_name){
$current_title ='';
$current_subtitle ='';
		if(isset($title) && !empty($title) ) {
			$current_title = $title;
		}elseif(function_exists('carbon_get_the_post_meta')){
			$current_title = carbon_get_the_post_meta($crb_title_field_name);
		}

		if(isset($subtitle) && !empty($subtitle) ) {
			$current_subtitle = $subtitle;
		}elseif(function_exists('carbon_get_the_post_meta')){
			$current_subtitle = carbon_get_the_post_meta($crb_subtitle_field_name);
		}
		?>
        <div class="page-section-header">
			<?php if(isset($current_title) && !empty($current_title)) :?>
                <h2 class="page-section-title"><?php echo  $current_title;   ?></h2>
			<?php endif; ?>
			<?php if(isset($current_subtitle) && !empty($current_subtitle)) :?>
                <h3 class="page-section-subtitle"><?php  echo $current_subtitle;  ?></h3>
			<?php endif;  ?>
        </div>
<?php
}



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

global  $front_page_news_title;
global  $front_page_news_subtitle;
global $front_page_news_per_page;
$front_page_news_per_page =3;
$front_page_news_title= '';
$front_page_news_subtitle ='';
function front_page_news_func( $atts ){

	global $front_page_news_per_page;
    global $front_page_news_title;
    global  $front_page_news_subtitle;

	if(isset($atts['count']) && !empty($atts['count']) ){
		$front_page_news_per_page = (int)$atts['count'];

	}else{
		$front_page_news_per_page = 3;
	}

	if(isset($atts['title'])  && !empty($atts['title'])){
		$front_page_news_title = htmlspecialchars($atts['title']);
	}

	if(isset($atts['subtitle'])  && !empty($atts['subtitle'])){
		$front_page_news_subtitle = htmlspecialchars($atts['subtitle']);
	}

	ob_start();

get_template_part('template-parts/front-page/news-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}

//posts
global  $front_page_posts_title;
global  $front_page_posts_subtitle;
global $front_page_posts_per_page;

$front_page_posts_title= '';
$front_page_posts_subtitle ='';
$front_page_posts_per_page =3;
add_shortcode( 'front_page_posts', 'front_page_posts_func' );

function front_page_posts_func( $atts ){
	global  $front_page_posts_title;
	global  $front_page_posts_subtitle;
	 global $front_page_posts_per_page;
	if(isset($atts['count']) && !empty($atts['count']) ){
		$front_page_posts_per_page = (int)$atts['count'];

	}else{
		$front_page_posts_per_page = 3;
	}

	if(isset($atts['title'])  && !empty($atts['title'])){
		$front_page_posts_title = htmlspecialchars($atts['title']);
	}

	if(isset($atts['subtitle'])  && !empty($atts['subtitle'])){
		$front_page_posts_subtitle = htmlspecialchars($atts['subtitle']);
	}

	ob_start();

get_template_part('template-parts/front-page/posts-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}

//testimonials
global  $front_page_testimonials_title;
global  $front_page_testimonials_subtitle;

$front_page_testimonials_title= '';
$front_page_testimonials_subtitle ='';
add_shortcode( 'front_page_testimonials', 'front_page_testimonials_func' );
function front_page_testimonials_func( $atts ){

	global  $front_page_testimonials_title;
	global  $front_page_testimonials_subtitle;

	if(isset($atts['title'])  && !empty($atts['title'])){
		$front_page_testimonials_title = htmlspecialchars($atts['title']);
	}

	if(isset($atts['subtitle'])  && !empty($atts['subtitle'])){
		$front_page_testimonials_subtitle = htmlspecialchars($atts['subtitle']);
	}

	ob_start();

 get_template_part('template-parts/front-page/testimonials-section');

	$result =  ob_get_contents();
		ob_end_clean();
	return  $result;
}


//products
global  $front_page_products_title;
global  $front_page_products_subtitle;

$front_page_products_title= '';
$front_page_products_subtitle ='';
add_shortcode( 'front_page_products', 'front_page_products_func' );
function front_page_products_func( $atts ){

	global  $front_page_products_title;
	global  $front_page_products_subtitle;

	if(isset($atts['title'])  && !empty($atts['title'])){
		$front_page_products_title = htmlspecialchars($atts['title']);
	}

	if(isset($atts['subtitle'])  && !empty($atts['subtitle'])){
		$front_page_products_subtitle = htmlspecialchars($atts['subtitle']);
	}

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
global  $front_page_teachers_title;
global  $front_page_teachers_subtitle;

$front_page_teachers_title= '';
$front_page_teachers_subtitle ='';
add_shortcode( 'front_page_teachers', 'front_page_teachers_func' );
function front_page_teachers_func( $atts ){

	global  $front_page_teachers_title;
	global  $front_page_teachers_subtitle;

	if(isset($atts['title'])  && !empty($atts['title'])){
		$front_page_teachers_title = htmlspecialchars($atts['title']);
	}

	if(isset($atts['subtitle'])  && !empty($atts['subtitle'])){
		$front_page_teachers_subtitle = htmlspecialchars($atts['subtitle']);
	}

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
