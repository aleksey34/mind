<?php  if(!defined("ABSPATH")) exit; ?>
<?php    if(!is_user_logged_in()) : ?>

	<div class="icon-reg-login-enter">
		<i class="fas fa-sign-in-alt"></i>
	</div>
	<div class="block-login-register">
		<div class="reg-login-form-wrap">
			<div class="reg-login-form-wrap">
				<div class="tab">
					<div class="tab-inner" >
						<button class="tablinks" onclick="openCity(event, 'sign-up')" >Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks active" onclick="openCity(event, 'sign-in')"  id="defaultOpen" >Sign In</button>
					</div>
				</div>
			</div>
			<?php get_template_part( "woocommerce/includes/parts/wc-form" , "login" ); ?>

			<?php get_template_part( "woocommerce/includes/parts/wc-form" , "register" ); ?>

		</div>
	</div>

<?php  endif; ?>