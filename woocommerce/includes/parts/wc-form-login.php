<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<form id="login-form-modal" class="form-detail woocommerce-form woocommerce-form-login login" method="post">
	<?php do_action( 'woocommerce_login_form_start' ); ?>
    <div class="tabcontent" id="sign-in">

        <div class="form-row">
            <label class="form-row-inner">
                <input type="text" name="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"  id="username" autocomplete="username"  class="woocommerce-Input woocommerce-Input--text input-text" required>
                <span class="label"><?php esc_html_e( 'Login or email', 'mind' ); ?></span>
                <span class="border"></span>
            </label>
        </div>
        <div class="form-row">
            <label class="form-row-inner">
                <input type="password" autocomplete="current-password" name="password" id="password_1" class="woocommerce-Input woocommerce-Input--text input-text" required>
                <span class="label"><?php esc_html_e( 'Password', 'woocommerce' ); ?></span>
                <span class="border"></span>
            </label>
        </div>

	    <?php do_action( 'woocommerce_login_form' ); ?>

<!--        <div class="form-row">-->
<!--            <label for="rememberme" class="form-row-inner">-->
<!--                <input class="from-input-remember woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" />-->
<!--                <span>--><?php //esc_html_e( 'Remember me', 'woocommerce' ); ?><!--</span>-->
<!--                <span class="border"></span>-->
<!--            </label>-->
<!--        </div>-->
        <div class="form-group">
            <label for="rememberme" class="">
                <input class="from-input-remember woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" />
                <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
<!--                <span class="border"></span>-->
            </label>
        </div>


        <div class="form-row">

            <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
            <input type="submit" name="login" class="register woocommerce-button button woocommerce-form-login__submit" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>">
        </div>
    </div>

    <p class="woocommerce-LostPassword lost_password">
        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
    </p>
	<?php do_action( 'woocommerce_login_form_end' ); ?>
</form>
