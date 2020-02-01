<?php  if(!defined("ABSPATH")) exit; ?>
<?php if(function_exists('carbon_get_the_post_meta')) :  ?>
	<section id="frontPageIntro" class="page-section page-section__intro intro ">
		<div class="page-container">
			<div class="intro__inner">
				<?php $intro_section_title =  carbon_get_the_post_meta( 'crb_front_page_intro_section_title' ) ;
				if(isset($intro_section_title) && !empty($intro_section_title)) :
					?>
					<h2 class="intro-title"><?php echo $intro_section_title ;  ?></h2>
				<?php endif;  ?>
				<?php
				$intro_section_subtitle =   carbon_get_the_post_meta( 'crb_front_page_intro_section_subtitle' )  ;
				if(isset($intro_section_subtitle) && !empty($intro_section_subtitle)) :
					?>
					<h3 class="intro-subtitle"><?php  echo $intro_section_subtitle ; ?></h3>
				<?php  endif; ?>
				<?php
				$intro_section_btn_title = carbon_get_the_post_meta('crb_front_page_intro_section_btn_title');
				$intro_section_btn_link  = carbon_get_the_post_meta('crb_front_page_intro_section_video_link');
				if(isset($intro_section_btn_link) && !empty($intro_section_btn_link) && isset($intro_section_subtitle) && !empty($intro_section_subtitle)) :
					?>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl"><?php echo $intro_section_btn_title   ;  ?></button>
				<?php endif;  ?>
			</div>
		</div>
	</section>

	<!--modal window for  section intro - show video-->
	<!-- Extra large modal -->
	<?php if(isset($intro_section_btn_link) && !empty($intro_section_btn_link)) :
		$poster_attr = '';
		$poster_attr = carbon_get_the_post_meta( 'crb_front_page_intro_section_video_poster' ) ;
		if(null === $poster_attr && !isset($poster_attr) && empty($poster_attr)){
			$poster_attr = '';
		}
        ?>
		<div  class="section-intro-modal  modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div  class="modal-dialog modal-xl">
				<div class="modal-content">
					<video  <?php  echo $poster_attr ? 'poster='.$poster_attr : '';  ?>  width="100%" height="auto" controls src="<?php  echo $intro_section_btn_link ; ?>"></video>
				</div>
			</div>
		</div>
	<?php  endif; ?>
	<!--ens modal window-->
<?php endif; ?>