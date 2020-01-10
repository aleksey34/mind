<?php
/**
 * for working update icon cart with ajax??
 */
add_filter('add_to_cart_fragments', 'header_add_to_cart_fragment');
if ( ! function_exists( 'mind_woocommerce_cart_link_fragment' ) ) {

	function header_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
		ob_start();
		?>
        <span class="badge badge-pill badge-secondary basket-btn__counter">
            <?php echo sprintf( $woocommerce->cart->cart_contents_count ); ?>
        </span>
		<?php
		$fragments['.basket-btn__counter'] = ob_get_clean();

		return $fragments;
	}

}

/**
 * @hooked wc_empty_cart_message - 10 -remove
 *
 * @hooked mind_empty_cart_message 10
 */
remove_action( 'woocommerce_cart_is_empty' ,'wc_empty_cart_message' , 10 );
add_action("woocommerce_cart_is_empty" , "mind_empty_cart_message" , 10);
function mind_empty_cart_message(){
?>

    <div class="alert alert-primary alert-dismissible fade show" role="alert">

            <div class="">
			<?php  esc_html_e("The cart is empty" , "mind") ?>
            </div>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
}


