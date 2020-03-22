<?php
if(!defined('ABSPATH')) exit();

add_action('add_meta_boxes' , 'mind_meta_box_front_page');
if(!function_exists('mind_meta_box_front_page')){

	function mind_meta_box_front_page(){

   if(get_page_template_slug() === "template-pages/front-page.php") :

		add_meta_box(
			"mind_desc_for_shortcode",
			__("Additional list shortcodes for Front Page" , 'mind'),
			"mind_handler_show_metabox_shorcodes_callback",
			array('page'),
			'side'

		);

		if(!function_exists('mind_handler_show_metabox_shorcodes_callback')){
			function mind_handler_show_metabox_shorcodes_callback($post , $meta){


			//	$meta['front_page_shortcodes_show_content']= '
	?>
<p>
	<h4>Список шорткодов:</h4>
	[front_page_intro] <br/>
	[front_page_benefits] <br/>
	[front_page_news count="3" title="some text" subtitle="some text"]<br/>
	[front_page_posts count="3" title="some text" subtitle="some text"]<br/>
	[front_page_testimonials title="some text" subtitle="some text"]<br/>
	[front_page_products title="some text" subtitle="some text"]]<br/>
	[front_page_quotes]<br/>
	[front_page_teachers title="some text" subtitle="some text"]<br/>
	[front_page_partners]<br/>
	[front_page_books] <br/>
	[front_page_map]<br/>
	<p>
		Эти шорткоды можно искользовать на Главной странице,
        некотрые буду работать корректно и на других страницах,
        если шорткод не работает на нужной странице - посмотрите
        его аналог в блоках Гутенберга.
	</p>
</p>

<?php

			}
		}
endif;
	}

}