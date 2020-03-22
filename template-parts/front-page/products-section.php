<?php  if(!defined("ABSPATH")) exit;
global  $front_page_products_title;
global  $front_page_products_subtitle;
?>
<section id="frontPageProducts" class="page-section section page-section__products">
	<div class="page-container">
		<?php
		mind_front_page_get_section_title_subtitle_part(
			$front_page_products_title,
			$front_page_products_subtitle,
			'crb_front_page_products_section_title',
			'crb_front_page_products_section_subtitle')
		?>
		<ul class="products front-page-products-list">
			<?php
			/**
			 * need 2 seminar and 1 webinar  to show
			 */
			$products_seminar_args = array(
				'posts_per_page' => 2,
				'post_type' => 'product' ,
				'product_cat' => 'vstrechi-seminary'
			) ;
			$products_seminar = new WP_Query( $products_seminar_args );
			// get_wd($products_seminar);
			if($products_seminar->have_posts()):
				while($products_seminar->have_posts()) : $products_seminar->the_post();
					?>
					<?php wc_get_template_part('content-product');  ?>
				<?php endwhile;
				endif;
				wp_reset_query();
				//wp_reset_postdata();
            ?>

			<?php
			$products_webinar_args = array(
				'posts_per_page' => 1,
				'post_type' => 'product' ,
				'product_cat' => 'vstrechi-vebinary'
			) ;
			$products_seminar = new WP_Query( $products_webinar_args );
			if($products_seminar->have_posts()):
				while($products_seminar->have_posts()) : $products_seminar->the_post();
					?>
					<?php wc_get_template_part('content-product');  ?>
				<?php
                endwhile;
                endif;
			    wp_reset_query();
                //wp_reset_postdata(); ?>
		</ul>
	</div>
</section>