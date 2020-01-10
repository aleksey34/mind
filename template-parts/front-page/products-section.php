<section class="page-section section page-section__products">
	<div class="page-container">

		<?php if(function_exists('carbon_get_the_post_meta')):  ?>
			<div class="page-section-header">
				<?php $products_section_title = carbon_get_the_post_meta('crb_front_page_products_section_title');
				if(isset($products_section_title) && !empty($products_section_title)) :?>
					<h2 class="page-section-title"><?php echo  $products_section_title;   ?></h2>
				<?php endif; ?>
				<?php $products_section_subtitle = carbon_get_the_post_meta('crb_front_page_products_section_subtitle'); ?>
				<?php if(isset($products_section_subtitle) && !empty($products_section_subtitle)) :?>
					<h3 class="page-section-subtitle"><?php  echo $products_section_subtitle;  ?></h3>
				<?php endif;  ?>
			</div>
		<?php  endif; ?>
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