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

<form  class="form-detail woocommerce-form woocommerce-form-register"  method="post"   <?php do_action( 'woocommerce_register_form_tag' ); ?> >
	<?php do_action( 'woocommerce_register_form_start' ); ?>
    <div class="tabcontent" id="sign-up">

	<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

        <div class="form-row">
            <label class="form-row-inner">
                <input autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"   type="text"  name="username" id="reg_username"   class="input-text woocommerce-Input woocommerce-Input--text" required>
                <span class="label"><?php esc_html_e( 'Username', 'woocommerce' ); ?></span>
                <span class="border"></span>
            </label>
        </div>
	<?php endif; ?>

        <div class="form-row">
            <label class="form-row-inner">
                <input  autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" type="email"  name="email" id="your_email" class="input-text woocommerce-Input woocommerce-Input--text" required>
                <span class="label"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;</span>
                <span class="border"></span>
            </label>
        </div>

	    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

        <div class="form-row">
            <label class="form-row-inner">
                <input checked="checked" type="password" name="password" id="reg_password" class="woocommerce-Input woocommerce-Input--text input-text" required   autocomplete="new-password" />
                <span class="label"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;</span>
                <span class="border"></span>
            </label>
        </div>

         <?php else : ?>
            <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
	    <?php endif; ?>

	    <?php do_action( 'woocommerce_register_form' ); ?>

        <div class="form-row-last">
	        <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>

            <input type="submit" name="register" class="register woocommerce-Button woocommerce-button button woocommerce-form-register__submit" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>">
        </div>

    </div>
	<?php do_action( 'woocommerce_register_form_end' ); ?>
</form>




