<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

defined( 'ABSPATH' ) || exit;

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;
?>

<p>
	<?php echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="u-columns woocommerce-Addresses col2-set addresses">
<?php endif; ?>

<?php foreach ( $get_addresses as $name => $address_title ) : ?>
	<?php
		$address = wc_get_account_formatted_address( $name );
		$col     = $col * -1;
		$oldcol  = $oldcol * -1;
	?>

	<div class="u-column<?php echo $col < 0 ? 1 : 2; ?> col-<?php echo $oldcol < 0 ? 1 : 2; ?> woocommerce-Address col-12 col-md-7 col-lg-6">

      <div class="card">
        <header class="card-header woocommerce-Address-title title">
			<h3><?php echo esc_html( $address_title ); ?></h3>
			<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit btn btn-light"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Add', 'woocommerce' ); ?></a>
		</header>
		<address class="card-body p-0 m-0">
			<?php
			//	echo $address ? wp_kses_post( $address ) : esc_html_e( 'You have not set up this type of address yet.', 'woocommerce' );
			$customer = new WC_Customer(get_current_user_id());
			
			if ( $customer->get_username() ) :
				if($customer->get_last_name()) {
					$lastname = $customer->get_last_name();
				} else{
					$lastname= "";
				}
				?>
                <p class="list-group-item woocommerce-customer-details--firstname--lastname"><?php esc_html_e("Имя: " , "mind") ; echo esc_html( $customer->get_first_name() )." ".$lastname; ?></p>
			<?php endif; ?>


			<?php if ( $customer->get_billing_country() ) : ?>
                <p class="list-group-item woocommerce-customer-details--country"><?php  esc_html_e("Страна: " , "mind") ;echo esc_html( $customer->get_billing_country() ); ?></p>
			<?php endif; ?>

			<?php if ( $customer->get_billing_city() ) : ?>
                <p class="list-group-item woocommerce-customer-details--city"><?php  esc_html_e("Город: " , "mind") ;echo esc_html( $customer->get_billing_city() ); ?></p>
			<?php endif; ?>

			<?php if ( $customer->get_billing_state() ) : ?>
                <p class="list-group-item woocommerce-customer-details--state"><?php  esc_html_e("Регон: " , "mind") ;echo esc_html(  $customer->get_billing_state() ); ?></p>
			<?php endif; ?>


			<?php if ( $customer->get_billing_address_1() ) : ?>
                <p class="list-group-item woocommerce-customer-details--address"><?php  esc_html_e("Адрес: " , "mind") ;echo esc_html( $customer->get_billing_address_1() ); ?></p>
			<?php endif; ?>

            <?php if ( $customer->get_billing_address_2() ) : ?>
                <p class="list-group-item woocommerce-customer-details--address"><?php  esc_html_e("Адрес 2: " , "mind") ;echo esc_html( $customer->get_billing_address_2() ); ?></p>
			<?php endif;?>

			<?php if ( $customer->get_billing_postcode() ) : ?>
                <p class="list-group-item woocommerce-customer-details--postcode"><?php esc_html_e("Почтовый индекс: " , "mind") ; echo esc_html( $customer->get_billing_postcode() ); ?></p>
			<?php endif; ?>

			<?php if ( $customer->get_billing_company() ) : ?>
                <p class="list-group-item woocommerce-customer-details--company"><?php  esc_html_e("Компания: " , "mind") ;echo esc_html(  $customer->get_billing_company() ); ?></p>
			<?php endif; ?>

			<?php if ( $customer->get_billing_phone() ) : ?>
                <p class="list-group-item woocommerce-customer-details--phone"><?php  esc_html_e("Телефон: " , "mind") ; echo esc_html( $customer->get_billing_phone() ); ?></p>
			<?php endif; ?>

			<?php if ( $customer->get_billing_email() ) : ?>
                <p class="list-group-item woocommerce-customer-details--email"><?php  esc_html_e("Email: " , "mind") ; echo esc_html( $customer->get_billing_email() ); ?></p>
			<?php endif; ?>

		</address>

      </div>

	</div>

<?php endforeach; ?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif;
