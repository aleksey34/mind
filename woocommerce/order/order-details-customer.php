<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<section class="card my-4 woocommerce-customer-details">

	<?php if ( $show_shipping ) : ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class=" woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

	<?php endif; ?>


	<h3 class="card-header woocommerce-column__title"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h3>

	<address class="card-body list-group list-group-flush pb-0">

		<?php // echo wp_kses_post( $order->get_formatted_billing_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>

        <?php if ( $order->get_user()->user_firstname ) :
            if($order->get_user() && $order->get_user()->user_lastname) {
            $lastname = $order->get_user()->user_lastname;
        } else{
            $lastname= "";
        }
            ?>
			<p class="list-group-item woocommerce-customer-details--firstname--lastname"><?php esc_html_e("Имя: " , "mind") ; echo esc_html( $order->get_user()->user_firstname )." ".$lastname; ?></p>
		<?php endif; ?>


		<?php if ( $order->get_billing_country() ) : ?>
            <p class="list-group-item woocommerce-customer-details--country"><?php  esc_html_e("Страна: " , "mind") ;echo esc_html( $order->get_billing_country() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_city() ) : ?>
            <p class="list-group-item woocommerce-customer-details--city"><?php  esc_html_e("Город: " , "mind") ;echo esc_html( $order->get_billing_city() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_state() ) : ?>
            <p class="list-group-item woocommerce-customer-details--state"><?php  esc_html_e("Регон: " , "mind") ;echo esc_html(  $order->get_billing_state() ); ?></p>
		<?php endif; ?>


        <?php if ( $order->get_billing_address_1() ) : ?>
            <p class="list-group-item woocommerce-customer-details--address"><?php  esc_html_e("Адрес: " , "mind") ;echo esc_html( $order->get_billing_address_1() ); ?></p>
		<?php endif; ?>

        <?php if ( $order->get_billing_address_2() ) : ?>
            <p class="list-group-item woocommerce-customer-details--address"><?php  esc_html_e("Адрес: " , "mind") ;echo esc_html( $order->get_billing_address_2() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_postcode() ) : ?>
            <p class="list-group-item woocommerce-customer-details--postcode"><?php esc_html_e("Почтовый индекс: " , "mind") ; echo esc_html( $order->get_billing_postcode() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_company() ) : ?>
            <p class="list-group-item woocommerce-customer-details--company"><?php  esc_html_e("Компания: " , "mind") ;echo esc_html(  $order->get_billing_company() ); ?></p>
		<?php endif; ?>

        <?php if ( $order->get_billing_phone() ) : ?>
			<p class="list-group-item woocommerce-customer-details--phone"><?php  esc_html_e("Телефон: " , "mind") ; echo esc_html( $order->get_billing_phone() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_email() ) : ?>
			<p class="list-group-item woocommerce-customer-details--email"><?php  esc_html_e("Email: " , "mind") ; echo esc_html( $order->get_billing_email() ); ?></p>
		<?php endif; ?>
	</address>

	<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->

		<div class="card woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
			<h3 class="card-header woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h3>
			<address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
			</address>
		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
