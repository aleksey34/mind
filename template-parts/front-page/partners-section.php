<?php  if(!defined("ABSPATH")) exit; ?>
<?php if(function_exists('carbon_get_the_post_meta')):  ?>
	<section id="frontPagePartners" class="page-section section section--gray page-section__partners">
		<div class="page-container">
			<div class="page-section-header">
				<?php $partners_section_title = carbon_get_the_post_meta('crb_front_page_partners_section_title');
				if(isset($partners_section_title) && !empty($partners_section_title)) :?>
					<h2 class="page-section-title"><?php echo  $partners_section_title;   ?></h2>
				<?php endif; ?>
				<?php $partners_section_subtitle = carbon_get_the_post_meta('crb_front_page_partners_section_subtitle'); ?>
				<?php if(isset($partners_section_subtitle) && !empty($partners_section_subtitle)) :?>
					<h3 class="page-section-subtitle"><?php  echo $partners_section_subtitle;  ?></h3>
				<?php endif;  ?>
			</div>
			<div class="logos">
				<?php  $partners_url = carbon_get_the_post_meta('crb_front_page_partners_section_partners_block') ;
				if(isset($partners_url) && !empty($partners_url)) :
					foreach ($partners_url as $item) :
						?>
						<div class="logos__item">
							<img src="<?php echo $item['icon'] ;  ?>" alt="img">
						</div>
					<?php endforeach;  endif; ?>
			</div>
		</div>
	</section>
    <div class="divider"></div>
<?php  endif; ?>