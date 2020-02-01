<?php  if(!defined("ABSPATH")) exit; ?>
<section id="frontPageNews" class="page-section section__news page-section__news">
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
		<div class="about-post-items">
			<?php
			$news_args = array(
				'posts_per_page' => 3,
				'post_type' => 'news',
			);
			$query = new WP_Query( $news_args );
			if($query->have_posts()) :
				while ($query->have_posts()) :  $query->the_post();
				 ?>
					<a href="<?php  echo get_permalink(); ?>" class="about__post-item" >
                        <?php  $news_thumbnail_url =  get_the_post_thumbnail_url()  ;
                        if(isset($news_thumbnail_url) && !empty($news_thumbnail_url)):
                        ?>
						<img class="about__img" src="<?php  echo $news_thumbnail_url  ;  ?>" alt="img" />
						<?php endif;  ?>
                        <div class="page-section-header page-section-header__news">
							<?php  the_title("<h2 class='page-section-title__news'>" , "</h2>") ;  ?>
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
								<?php the_excerpt();  ?>
							</h3>
						</div>
					</a>
			<?php endwhile;
			endif;
			wp_reset_postdata();
			//wp_reset_query();
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
<div class="divider"></div>