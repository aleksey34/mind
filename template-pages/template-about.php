<?php
/*
Template Name: Template About
*/

get_header();

?>
<!--about us -->
<div class="container  woocommerce-product-details__short-description">
    <div class="row about-body">
        <div class="col-12">
	        <?php if(have_posts()):
		        while (have_posts()) : the_post();
			        ?>
	                <?php the_post_thumbnail();  ?>
			        <?php the_title();  ?>
			        <?php the_content(); ?>
		        <?php
		        endwhile;
	        endif;
	        ?>
        </div>

		<div class="col-12 col-lg-6">
			<div class="about-contact-data-wrap">
                <h3 class="about-contact-form__title">Мои Контакты:</h3>
                <ul class="list-group list-group-flush">
	                <?php 	$footer_email = get_theme_mod("footer_contact_email");
	                if(isset($footer_email) && !empty($footer_email)) : ?>
                    <li class="list-group-item  list-group-item-action">
                        <a href="<?php echo $footer_email;  ?>" class="about__text__mail">
                            <i class="fas fa-envelope-open-text"></i>&emsp;
                            <span class="about-contact-email">
                                <?php 	echo  $footer_email; ?>
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>
	                <?php
	                $footer_phone = get_theme_mod("footer_contact_phone");   ;
	                if(isset($footer_phone) && !empty($footer_phone)) : ?>
                    <li class="list-group-item  list-group-item-action">
                          <span class="about__text">
                              <i class="fas fa-phone"></i>&emsp;
                              <span class="about-contact-phone">
                                  <?php echo $footer_phone;  ?>
                              </span>
                          </span>
                    </li>
                    <?php endif; ?>
	                <?php
	                $footer_address = get_theme_mod("footer_contact_address");   ;
	                if(isset($footer_address) && !empty($footer_address)) : ?>
                    <li class="list-group-item  list-group-item-action">
                            <span class="about__text">
                                <i class="fas fa-map-marker-alt"></i>&emsp;
                                <span class="about-contact-address">
                                    <?php echo $footer_address;   ?>
                                </span>
                            </span>
                    </li>
                     <?php  endif; ?>
	                <?php
	                $footer_skype = get_theme_mod("footer_contact_skype");   ;
	                if(isset($footer_skype) && !empty($footer_skype)) : ?>
                    <li class="list-group-item  list-group-item-action">
                            <span class="about__text">
                                <i class="fab fa-skype"></i>&emsp;
                                <span class="about-contact-skype">
                                    <?php echo  $footer_skype;   ?>
                                </span>
                            </span>
                    </li>
                      <?php endif; ?>
                </ul>
            </div>
		</div>

        <?php
         if(function_exists('carbon_get_the_post_meta')):
	         $cf7_shortcode = '';
	         $cf7_shortcode =  carbon_get_the_post_meta('crb_about_page_contactform_shortcode');
            if(isset($cf7_shortcode) && !empty($cf7_shortcode) ) : ?>
        <div class="col-12 col-lg-6">
            <div class="about-contact-form-wrap ">
                <h3 class="about-contact-form__title">Напишите мне</h3>
                <?php echo do_shortcode("$cf7_shortcode") ; ?>
            </div>
		</div>
        <?php endif;  endif; ?>
	</div>
</div>
<?php
// _________________СЕКЦИЯ____________________ MAP
 get_template_part('template-parts/front-page/map-section');

get_footer() ;
?>
