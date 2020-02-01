<?php  if(!defined("ABSPATH")) exit; ?>
<?php if(function_exists('carbon_get_the_post_meta')):
	$map =  carbon_get_the_post_meta('crb_front_page_map_section_map_iframe');
	if(isset($map) && !empty($map)) :
		?>
		<section id="frontPageMap" class="page-section section page-section__map">
			<div class="map">
				<div class="map__item__dot">
					<div class="map__title">
						<?php  echo $map;  ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; endif;  ?>