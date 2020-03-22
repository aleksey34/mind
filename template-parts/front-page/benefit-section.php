<?php  if(!defined("ABSPATH")) exit; ?>
<?php if(function_exists('carbon_get_the_post_meta')) :  ?>

	<section id="frontPageBenefit" class="page-section page-section__benefits section ">
		<div class="page-container">

			<div class="page-section-header">
				<?php
				$benefit_section_title =  carbon_get_the_post_meta( 'crb_front_page_benefit_section_title' ) ;
				if(isset($benefit_section_title) && !empty($benefit_section_title)) :
					?>
					<h2 class="page-section-title"><?php echo $benefit_section_title ;  ?></h2>
				<?php
				endif;
				$benefit_section_subtitle =  carbon_get_the_post_meta( 'crb_front_page_benefit_section_subtitle' ) ;
				if(isset($benefit_section_subtitle) && !empty($benefit_section_subtitle)) :
					?>
					<h3 class="page-section-subtitle"><?php echo  $benefit_section_subtitle ; ?></h3>
				<?php  endif; ?>
			</div>

			<?php
			$benefit_section_blocks =   carbon_get_the_post_meta('crb_front_page_benefit_section_benefit_block' );
			if(isset($benefit_section_blocks) && !empty($benefit_section_blocks)) : ?>
            <div class="services">
			<?php 	foreach ($benefit_section_blocks as $benefit_section_block) :
					?>



					<div class="services__item">
						<?php if(isset($benefit_section_block['icon']) && !empty($benefit_section_block['icon'])) :  ?>
							<img class="services__icon" src="<?php  echo $benefit_section_block['icon'] ; ?>" alt="img">
						<?php  endif; ?>
						<?php if(isset($benefit_section_block['title']) && !empty($benefit_section_block['title'])) :  ?>
							<div class="services__title"><?php  echo $benefit_section_block['title'] ; ?></div>
						<?php endif;  ?>
						<?php if(isset($benefit_section_block['content']) && !empty($benefit_section_block['content'])) :  ?>
							<div class="services__text"><?php  echo $benefit_section_block['content'] ; ?></div>
						<?php  endif;  ?>
					</div>


				<?php
				endforeach;?>
        </div>
				<?php
			endif;
			?>
		</div>
	</section>
<?php  endif;  ?>