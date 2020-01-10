<?php  if(!defined("ABSPATH")) exit; ?>
<?php // if(is_user_logged_in() && !is_cart()  ) : ?>
<?php // if( !is_cart() || !is_checkout()   || is_page_template('template-pages/template-checkout.php')) : ?>
<?php if( is_cart() || is_wc_endpoint_url("order-received") ) return ""; ?>
	<div class="s-header__basket-wr woocommerce mind-icon-cart">
		<a href="<?php echo wc_get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
			<span class="badge badge-pill badge-secondary basket-btn__counter">
                <?php echo sprintf(WC()->cart->get_cart_contents_count()); ?>
            </span>
			<i class="fas fa-cart-plus"></i>
		</a>
        <div class="header-icon-cart-widget">
            <?php   the_widget("WC_Widget_Cart" , "title=") ; ?>
        </div>
	</div>
