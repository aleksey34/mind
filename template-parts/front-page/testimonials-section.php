<?php  if(!defined("ABSPATH")) exit;
$testimonial_array = array();
?>
<section id="frontPageTestimonials" class="page-section page-section__testimonials section ">
	<div class="page-container">
		<?php

        if(function_exists('carbon_get_the_post_meta')):  ?>
			<div class="page-section-header">
				<?php $testimonials_section_title = carbon_get_the_post_meta('crb_front_page_testimonials_section_title');
				if(isset($testimonials_section_title) && !empty($testimonials_section_title)) :?>
					<h2 class="page-section-title"><?php echo  $testimonials_section_title;   ?></h2>
				<?php endif; ?>
				<?php $testimonials_section_subtitle = carbon_get_the_post_meta('crb_front_page_testimonials_section_subtitle'); ?>
				<?php if(isset($testimonials_section_subtitle) && !empty($testimonials_section_subtitle)) :?>
					<h3 class="page-section-subtitle"><?php  echo $testimonials_section_subtitle;  ?></h3>
				<?php endif;  ?>
			</div>
		<?php  endif; ?>
		<div class="testimonial-wrapper">
			<?php
			$testimonials_args = array(
				'posts_per_page' => -1,
				'post_type' => 'testimonials',
			);
			$query = new WP_Query( $testimonials_args );
			if($query->have_posts()) :  $testimonial_counter= 0;
				while ($query->have_posts()) :  $query->the_post();
					?>
					<div class="testimonial-item"   data-toggle="modal" data-target="#exampleModalScrollableTestimonial<?php echo $testimonial_counter; ?>">
						<blockquote class="blockquote">
                            <?php $testimonial_thumbnail_url =  get_the_post_thumbnail_url();
                            if(isset($testimonial_thumbnail_url) && !empty($testimonial_thumbnail_url)) :
                            $testimonial_array[$testimonial_counter]['thumbnail_url'] = $testimonial_thumbnail_url;
                                ?>
							<img class="reviews__photo" src="<?php echo $testimonial_thumbnail_url;  ?>" alt="img">
							<?php endif;  ?>
                            <?php
                            $testimonial_array[$testimonial_counter]['title'] = get_the_title();
                            the_title("<h4>" , '</h4>')  ?>
							<?php
							the_excerpt();
							$testimonial_array[$testimonial_counter]['content'] = get_the_content();
                              ?>
							<?php
							if(function_exists('carbon_get_the_post_meta')):
								$testimonial_footer =  carbon_get_the_post_meta('crb_testimonials_author') ;
								if(isset($testimonial_footer) && !empty($testimonial_footer)) :
									$testimonial_array[$testimonial_counter]["author"] = $testimonial_footer;
									?>
									<footer class="blockquote-footer"><?php   echo $testimonial_footer;  ?></footer>
								<?php endif; endif;  ?>
						</blockquote>
					</div>
				<?php  $testimonial_counter++;
				endwhile;
				endif;
			//wp_reset_postdata();
			wp_reset_query();
			?>
		</div>
	</div>
</section>
<div class="divider"></div>
<?php  //modal testimonials
if(isset($testimonial_array) && !empty($testimonial_array)):
$testimonial_array_count = count($testimonial_array) ;
for($i=0; $i< $testimonial_array_count; $i++) :    ?>
<!-- Modal -->
<div class="modal fade testimonial-modal" id="exampleModalScrollableTestimonial<?php echo $i  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle<?php echo $i ; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title  text-center w-100" id="exampleModalScrollableTitle<?php echo $i  ?>"><?php  echo $testimonial_array[$i]['title'];  ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php   if(isset($testimonial_array[$i]['thumbnail_url']) && !empty($testimonial_array[$i]['thumbnail_url']) ) : ?>
                <img class="testimonial-thumbnail-modal" src="<?php echo $testimonial_array[$i]['thumbnail_url'] ; ?>" alt="img">
               <?php  endif; ?>
                <?php echo $testimonial_array[$i]['content'];  ?>
                <footer class="blockquote-footer">
                <?php echo $testimonial_array[$i]['author'];  ?>
                </footer>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php  endfor;
endif;
?>