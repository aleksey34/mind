
<section class="page-section section__news page-section__posts">
	<div class="page-container-news">
		<?php if(function_exists('carbon_get_the_post_meta')):  ?>
			<div class="page-section-header">
				<?php $posts_section_title = carbon_get_the_post_meta('crb_front_page_posts_section_title');
				if(isset($posts_section_title) && !empty($posts_section_title)) :?>
					<h2 class="page-section-title"><?php echo  $posts_section_title;   ?></h2>
				<?php endif; ?>
				<?php $posts_section_subtitle = carbon_get_the_post_meta('crb_front_page_posts_section_subtitle'); ?>
				<?php if(isset($posts_section_subtitle) && !empty($posts_section_subtitle)) :?>
					<h3 class="page-section-subtitle"><?php  echo $posts_section_subtitle;  ?></h3>
				<?php endif;  ?>
			</div>
		<?php  endif; ?>
		<div class="about">
			<?php
			$posts_args = array(
				'posts_per_page' => 3,
				//'post_type' => 'posts',
			);
			$query = new WP_Query( $posts_args );
			if($query->have_posts()) :
				while ($query->have_posts()) :  $query->the_post();
					?>
					<a href="<?php echo get_permalink();  ?>" class="about__item">
						<img class="about__img" src="<?php  echo get_the_post_thumbnail_url(); ; ?>" alt="img">
						<div class="page-section-header page-section-header__news">
							<?php the_title("<h2 class='page-section-title__news'>" , "</h2>")  ?>
							<h3 class="page-section-subtitle__nuws">
								<?php  the_excerpt();  ?>
							</h3>
						</div>
					</a>
				<?php endwhile;
			endif;
			//wp_reset_postdata();
			wp_reset_query();
			?>
		</div>
		<div class="btn__news">
			<a href="<?php echo home_url('/posts');  ?>" class="btn">
				<?php if(function_exists('carbon_get_the_post_meta')):  ?>
					<?php $posts_section_btn_title = carbon_get_the_post_meta('crb_front_page_posts_section_btn_title');  ?>
					<?php  if(isset($posts_section_btn_title) && !empty($posts_section_btn_title)):  ?>
						<?php  echo $posts_section_btn_title;  ?>
					<?php  else : ?>
						Все статьи
					<?php endif; else: ?>
					Все статьи
				<?php endif; ?>
			</a>
		</div>
	</div>
</section>