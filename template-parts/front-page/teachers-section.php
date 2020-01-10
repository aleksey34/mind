<section class="page-section section page-section__teachers">
	<div class="page-container">
		<?php if(function_exists('carbon_get_the_post_meta')) :  ?>
			<div class="page-section-header">
				<?php $teachers_section_title = carbon_get_the_post_meta('crb_front_page_teachers_section_title');
				if(isset($teachers_section_title) && !empty($teachers_section_title)) :?>
					<h2 class="page-section-title"><?php echo  $teachers_section_title;   ?></h2>
				<?php endif; ?>
				<?php $teachers_section_subtitle = carbon_get_the_post_meta('crb_front_page_teachers_section_subtitle'); ?>
				<?php if(isset($teachers_section_subtitle) && !empty($teachers_section_subtitle)) :?>
					<h3 class="page-section-subtitle"><?php  echo $teachers_section_subtitle;  ?></h3>
				<?php endif;  ?>
			</div>
		<?php  endif; ?>
		<div class="teachers">
			<?php
			$teachers_args = array(
				'posts_per_page' => -1,
				'post_type' => 'teachers',
			);
			$query = new WP_Query( $teachers_args );
			if($query->have_posts()) :
				while ($query->have_posts()) :  $query->the_post();
					?>
					<div class="teachers__item">
						<div class="teachers__inner">
							<div class="teachers__img">
								<img src="<?php echo get_the_post_thumbnail_url() ; ?>" alt="img">
							</div>
							<?php if(function_exists('carbon_get_the_post_meta')) :  ?>
								<div class="teachers__text">
									<div class="social">
										<?php  $facebook_link = carbon_get_the_post_meta('crb_teachers_facebook_link') ;
										if(isset($facebook_link) && !empty($facebook_link)) :
											?>
											<a target="_blank" href="<?php  echo $facebook_link ; ?>" class="social__item">
												<i class="fab fa-facebook-f"></i>
											</a>
										<?php endif;  ?>
										<?php  $twitter_link = carbon_get_the_post_meta('crb_teachers_twitter_link') ;
										if(isset($twitter_link) && !empty($twitter_link)) :
											?>
											<a target="_blank" href="<?php echo $twitter_link;  ?>" class="social__item">
												<i class="fab fa-twitter"></i>
											</a>
										<?php endif;  ?>
										<?php  $vk_link = carbon_get_the_post_meta('crb_teachers_vk_link') ;
										if(isset($vk_link) && !empty($vk_link)) :
											?>
											<a target="_blank" href="<?php echo $vk_link ; ?>" class="social__item">
												<i class="fab fa-vk"></i>
											</a>
										<?php endif;  ?>
										<?php  $instagram_link = carbon_get_the_post_meta('crb_teachers_instagram_link') ;
										if(isset($instagram_link) && !empty($instagram_link)) :
											?>
											<a target="_blank" href="<?php echo $instagram_link ; ?>" class="social__item">
												<i class="fab fa-instagram"></i>
											</a>
										<?php endif;  ?>
									</div>
								</div>
							<?php endif;  ?>
						</div>
						<div class="teachers__info">
							<div class="teachers__name"><?php the_title();  ?></div>
							<div class="teachers__prof"><?php echo  get_the_terms('', 'personal_role')[0]->name ; ?></div>
							<div class="teacher-description">
								<?php  the_excerpt();  ?>
							</div>
						</div>
					</div>
				<?php endwhile; endif;
			//wp_reset_postdata();
			wp_reset_query();
			?>
		</div>
    </div>
</section>