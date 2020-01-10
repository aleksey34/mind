<?php if(function_exists('carbon_get_the_post_meta')) :  ?>
	<div class="page-section page-section__top intro ">
		<div class="page-container">
			<div class="intro__inner">
				<?php $top_section_title =  carbon_get_the_post_meta( 'crb_front_page_top_section_title' ) ;
				if(isset($top_section_title) && !empty($top_section_title)) :
					?>
					<h2 class="intro-title"><?php echo $top_section_title ;  ?></h2>
				<?php endif;  ?>
				<?php
				$top_section_subtitle =   carbon_get_the_post_meta( 'crb_front_page_top_section_subtitle' )  ;
				if(isset($top_section_subtitle) && !empty($top_section_subtitle)) :
					?>
					<h3 class="intro-subtitle"><?php  echo $top_section_subtitle ; ?></h3>
				<?php  endif; ?>
				<?php
				$top_section_btn_title = carbon_get_the_post_meta('crb_front_page_top_section_btn_title');
				$top_section_btn_link  = carbon_get_the_post_meta('crb_front_page_top_section_video_link');
				if(isset($top_section_btn_link) && !empty($top_section_btn_link) && isset($top_section_subtitle) && !empty($top_section_subtitle)) :
					?>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl"><?php echo $top_section_btn_title   ;  ?></button>
				<?php endif;  ?>
			</div>
		</div>
	</div>

	<!--modal window for  section top - show video-->
	<!-- Extra large modal -->
	<?php if(isset($top_section_btn_link) && !empty($top_section_btn_link)) :  ?>
		<div  class="section-top-modal  modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div  class="modal-dialog modal-xl">
				<div class="modal-content">
					<video width="100%" height="auto" controls src="<?php  echo $top_section_btn_link ; ?>"></video>
				</div>
			</div>
		</div>
	<?php  endif; ?>
	<!--ens modal window-->
<?php endif; ?>