<?php  if(!defined("ABSPATH")) exit; ?>
<div class="col-12 header-nav">
	<nav  class="navbar top-navbar navbar-expand-lg navbar-light bg-transparent ">

		<?php   $is_front_page =  is_front_page() ; ?>
		<?php if(!$is_front_page) :  ?>
            <a class="custom-logo-link" href="<?php  echo home_url('/'); ?>">
		<?php else:   ?>
        <span  class="custom-logo-link"  >
        <?php    endif;   ?>
        <?php
        $custom_logo_html =  mind_get_custom_logo_html();
        if(!empty($custom_logo_html)){
            echo $custom_logo_html;
        }else{
            bloginfo("name");
        }
        ?>

		<?php  if($is_front_page) :  ?>
         </span>
        <?php  else:  ?>
         </a>
       <?php endif; ?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse  <?php  echo $is_front_page ? 'front-page-top-menu' : '' ; ?>" id="navbarSupportedContent">
			<?php
            if($is_front_page){
	           mind_the_front_page_menu();
            }else{
	            mind_the_top_menu();
            }
			?>
			<?php if(is_user_logged_in()) :  $current_user = wp_get_current_user() ; ?>
            <div class="header-nav-menu-name-logout">
					<a href="<?php echo wc_get_account_endpoint_url($current_user->ID); // get_dashboard_url() ;  // or - echo  get_edit_profile_url();   ?>">
                                    <span>

                                        <?php echo $current_user->display_name ; ?>
                                    </span>
					</a>
					<a  title="Выйти" href="<?php echo wp_logout_url(home_url('/'));  ?> ">
						<i class="fas fa-sign-in-alt"></i>
					</a>

			</div>
            <?php endif;  ?>
		</div>





	</nav>
</div>

