<?php  if(!defined("ABSPATH")) exit;
$modal_teachers_data =  array();
?>
<section id="frontPageTeachers" class="page-section section page-section__teachers">
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
                $teachers_loop_count = 0;
				while ($query->have_posts()) :  $query->the_post();
					?>
					<div class="teachers__item">
						<div class="teachers__inner">
							<?php  $teacher_thumbnail_url =  get_the_post_thumbnail_url()  ;
							if(isset($teacher_thumbnail_url) && !empty($teacher_thumbnail_url)):
                                $modal_teachers_data[$teachers_loop_count]['thumbnail_url'] = $teacher_thumbnail_url ? $teacher_thumbnail_url : '';
							?>
							<div class="teachers__img">
								<img src="<?php echo $teacher_thumbnail_url ; ?>" alt="img">
							</div>
                            <?php endif;  ?>
							<?php if(function_exists('carbon_get_the_post_meta')) :  ?>
								<div class="teachers__text">
									<div class="teacher-social">
										<?php  $facebook_link = carbon_get_the_post_meta('crb_teachers_facebook_link') ;
										if(isset($facebook_link) && !empty($facebook_link)) :
											?>
											<a target="_blank" href="<?php  echo $facebook_link ; ?>" class="teacher-social__item">
												<i class="fab fa-facebook-f"></i>
											</a>
										<?php endif;  ?>
										<?php  $twitter_link = carbon_get_the_post_meta('crb_teachers_twitter_link') ;
										if(isset($twitter_link) && !empty($twitter_link)) :
											?>
											<a target="_blank" href="<?php echo $twitter_link;  ?>" class="teacher-social__item">
												<i class="fab fa-twitter"></i>
											</a>
										<?php endif;  ?>
										<?php  $vk_link = carbon_get_the_post_meta('crb_teachers_vk_link') ;
										if(isset($vk_link) && !empty($vk_link)) :
											?>
											<a target="_blank" href="<?php echo $vk_link ; ?>" class="teacher-social__item">
												<i class="fab fa-vk"></i>
											</a>
										<?php endif;  ?>
										<?php  $instagram_link = carbon_get_the_post_meta('crb_teachers_instagram_link') ;
										if(isset($instagram_link) && !empty($instagram_link)) :
											?>
											<a target="_blank" href="<?php echo $instagram_link ; ?>" class="teacher-social__item">
												<i class="fab fa-instagram"></i>
											</a>
										<?php endif;  ?>
										<?php  $youtube_link = carbon_get_the_post_meta('crb_teachers_youtube_link') ;
										if(isset($youtube_link) && !empty($youtube_link)) :
											?>
                                            <a target="_blank" href="<?php echo $youtube_link ; ?>" class="teacher-social__item">
                                                <i class="fab fa-youtube"></i>
                                            </a>
										<?php endif;  ?>
									</div>
								</div>
							<?php endif;  ?>
						</div>
						<div class="teachers__info" data-toggle="modal"  data-target="#exampleModalScrollTeacher<?php echo $teachers_loop_count; ?>">
							<div class="teachers__name"><?php $teacher_title = get_the_title();
								$modal_teachers_data[$teachers_loop_count]['title'] = $teacher_title;
								echo $teacher_title;
							?></div>
                            <?php  if( isset( get_the_terms('', 'personal_role')[0])  && !empty(get_the_terms('', 'personal_role')[0]) ) :
	                            $teacher_personal_role_name ='';
	                           for($i=0; $i < count(get_the_terms('', 'personal_role')); $i++){
		                           $personal_role_span =  $teacher_personal_role_name === '' ? '' : " , " ;
	                               $teacher_personal_role_name = $teacher_personal_role_name. $personal_role_span .get_the_terms('', 'personal_role')[$i]->name;
                               }
                                $modal_teachers_data[$teachers_loop_count]['personal_role'] = $teacher_personal_role_name ? $teacher_personal_role_name : '';
	                            ?>
							<div class="teachers__prof"><?php echo  $teacher_personal_role_name ; ?></div>
							<?php  endif; ?>
                            <div class="teacher-description">
								<?php  the_excerpt();
								$modal_teachers_data[$teachers_loop_count]['content'] = get_the_content();
								?>
							</div>
						</div>
					</div>
				<?php
                $teachers_loop_count++;
                endwhile;
                endif;
			//wp_reset_postdata();
			wp_reset_query();
			?>
		</div>
    </div>
</section>
<div class="divider"></div>
<?php  //modal teacher
if(isset($modal_teachers_data) && !empty($modal_teachers_data)):
	$teacher_array_count = count($modal_teachers_data) ;
	for($i=0; $i< $teacher_array_count; $i++) :    ?>
<!-- Modal -->
<div class="modal fade testimonial-modal" id="exampleModalScrollTeacher<?php echo $i  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollTeacherTitle<?php echo $i ; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="exampleModalScrollTeacherTitle<?php echo $i  ?>"><?php  echo $modal_teachers_data[$i]['title'];  ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php   if(isset($modal_teachers_data[$i]['thumbnail_url']) && !empty($modal_teachers_data[$i]['thumbnail_url']) ) : ?>
                <img class="testimonial-thumbnail-modal" src="<?php echo $modal_teachers_data[$i]['thumbnail_url'] ; ?>" alt="img">
               <?php  endif; ?>
	            <?php   if(isset($modal_teachers_data[$i]['personal_role']) && !empty($modal_teachers_data[$i]['personal_role']) ) : ?>
                <p class="lead text-muted text-center"><?php echo $modal_teachers_data[$i]['personal_role'];   ?></p>
                <?php   endif; ?>
                <p class="">
	                <?php echo $modal_teachers_data[$i]['content'];  ?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
endfor;
endif;
?>

