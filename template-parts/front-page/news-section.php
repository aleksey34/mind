<section class="page-section section__news page-section__news">
	<div class="page-container-news">
		<?php if(function_exists('carbon_get_the_post_meta')):  ?>
			<div class="page-section-header">
				<?php $news_section_title = carbon_get_the_post_meta('crb_front_page_news_section_title');
				if(isset($news_section_title) && !empty($news_section_title)) :?>
					<h2 class="page-section-title"><?php echo  $news_section_title;   ?></h2>
				<?php endif; ?>
				<?php $news_section_subtitle = carbon_get_the_post_meta('crb_front_page_news_section_subtitle'); ?>
				<?php if(isset($news_section_subtitle) && !empty($news_section_subtitle)) :?>
					<h3 class="page-section-subtitle"><?php  echo $news_section_subtitle;  ?></h3>
				<?php endif;  ?>
			</div>
		<?php endif;  ?>
		<div class="about">
			<?php
			$news_args = array(
				'posts_per_page' => 3,
				'post_type' => 'news',
			);
			$query = new WP_Query( $news_args );
			if($query->have_posts()) :
				while ($query->have_posts()) :  $query->the_post();
					?>
					<a href="<?php  echo get_permalink(); ?>" class="about__item">
						<img class="about__img" src="<?php  echo  get_the_post_thumbnail_url() ;  ?>" alt="img">
						<div class="page-section-header page-section-header__news">
							<?php  the_title("<h2 class='page-section-title__news'>" , "</h2>") ;  ?>
							<h3 class="page-section-subtitle__nuws">
								<?php the_excerpt();  ?>
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
			<a href="<?php  echo home_url('/news') ?>" class="btn">
				<?php if(function_exists('carbon_get_the_post_meta')):  ?>
					<?php $news_section_btn_title = carbon_get_the_post_meta('crb_front_page_news_section_btn_title');  ?>
					<?php  if(isset($news_section_btn_title) && !empty($news_section_btn_title)):  ?>
						<?php  echo $news_section_btn_title;  ?>
					<?php  else : ?>
						Все новости
					<?php endif; else: ?>
					Все новости
				<?php endif; ?>
			</a>
		</div>
	</div>
</section>
