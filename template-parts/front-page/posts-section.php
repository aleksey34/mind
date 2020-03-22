<?php  if(!defined("ABSPATH")) exit;

global $front_page_posts_per_page;
global  $front_page_posts_title;
global  $front_page_posts_subtitle;
?>
<section id="frontPagePosts" class="page-section section__news page-section__posts">
	<div class="page-container-news">
		<?php
		mind_front_page_get_section_title_subtitle_part(
			$front_page_posts_title,
			$front_page_posts_subtitle,
			'crb_front_page_posts_section_title',
			'crb_front_page_posts_section_subtitle')
		?>
		<div class="about-post-items">
			<?php
			$posts_args = array(
				'posts_per_page' => $front_page_posts_per_page,
				//'post_type' => 'posts',
			);
			$query = new WP_Query( $posts_args );
			if($query->have_posts()) :
				while ($query->have_posts()) :  $query->the_post();
					?>
					<a href="<?php echo get_permalink();  ?>" class="about__post-item">
						<?php  $post_thumbnail_url =  get_the_post_thumbnail_url()  ;
						if(isset($post_thumbnail_url) && !empty($post_thumbnail_url)):
						?>
						<img class="about__img" src="<?php  echo $post_thumbnail_url; ; ?>" alt="img">
						<?php  endif; ?>
                        <div class="page-section-header page-section-header__news">
							<?php the_title("<h2 class='page-section-title__news'>" , "</h2>")  ?>
	                            <?php
		                        $list_categories_id= array();
                                $list_categories_id =wp_get_post_categories(get_the_ID());
                                if(null !== $list_categories_id && !empty($list_categories_id)){
                                    echo "<span>Категория: </span>";
                                    for($i = 0 ; $i < count($list_categories_id); $i++ ){
                                     echo " ";
                                     echo "<span class='front-page-categories-list-item'>";
                                        echo get_the_category_by_ID($list_categories_id[$i]);
                                     echo "</span>";
                                    }
                                }
	                            ?>
                            <h3 class="page-section-subtitle__news">
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
			<a href="<?php echo home_url('/posts'); ?>" class="btn">
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