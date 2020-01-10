<?php
if(!defined("ABSPATH")) exit;
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-auto header-breadcrumbs">
			<div>
				<?php   $is_front_page =  is_front_page() ; ?>
				<?php if($is_front_page) :  ?>
				<span class="custom-logo-link">
			<?php else:  ?>
					<a class="custom-logo-link" href="<?php  echo get_site_url('/'); ?>">
			<?php endif;  ?>

			<?php
			$custom_logo_html =  mind_get_custom_logo_html();
			if(!empty($custom_logo_html)){
				echo $custom_logo_html;
			}else{
				bloginfo("name");
			}
			?>

			<?php if(!$is_front_page) :  ?>
			</a>
					<?php else:  ?>
			</span>
			<?php endif;  ?>

			</div>

            <div>
	            <?php
	            woocommerce_breadcrumb();
	            ?>
            </div>

		</div>
	</div>
</div>

