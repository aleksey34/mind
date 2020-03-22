<?php
 if(!defined("ABSPATH")) exit;
//get_wd(is_product());
//if(is_product()){
//	remove_action("woocommerce_sidebar", "woocommerce_get_sidebar", 10);
//}

/*

                                                            */
//add_action("woocommerce_after_single_product_summary" ,"mind_single_product_upsell_wrapper_start", 12 );
//add_action("woocommerce_after_single_product_summary" ,"mind_single_product_upsell_wrapper_close",17 );
//add_action("woocommerce_after_single_product_summary" ,"mind_single_product_related_wrapper_start",18 );
//add_action("woocommerce_after_single_product_summary" ,"mind_single_product_related_wrapper_close", 25 );
//
//function mind_single_product_upsell_wrapper_start(){
//
/*
<!--	<div class="container-fluid">-->
<!--		<div class="row">-->

//}
//function mind_single_product_upsell_wrapper_close(){
//
<!--		</div>-->
<!--	</div>-->

//}
//function mind_single_product_related_wrapper_start(){
//
<!--33333333333333333333333-->

//}
//function mind_single_product_related_wrapper_close(){

<!--44444444444444444444444-->

//}
*/


/**
 *
 * add sticker for product -  this product is finished;
 */
function mind_product_sticker_product_is_finished(){
	// check exist or not   $product->is_in_stock()  or $product->is_purchasable()- and there are  there more
	global $product;
//	$rest_products = $product->get_stock_quantity(); // get quantity goods
	if ( ! $product->is_in_stock() ) :
		?>
<div class="product_sticker_product_is_finished">
	<img src="" alt="img" />
	There are no goods!
	<?php
	if (  $product->is_purchasable() ) {
		echo "this is _perchssble";
	}
	?>
</div>
<?php
	endif;
}
add_action( 'woocommerce_before_shop_loop_item_title' ,'mind_product_sticker_product_is_finished' , 5 );
add_action( 'woocommerce_before_single_product_summary', 'mind_product_sticker_product_is_finished' , 5 );

/**
 * @return string
 * sale flesh  -custom
 */
//function wpex_woo_sale_flash() {
//	return '<span class="onsale">' . esc_html__( 'Sale', 'woocommerce' ) . '</span>';
//}
//add_filter( 'woocommerce_sale_flash', 'wpex_woo_sale_flash' );




//remove haeading in tabs
add_filter("woocommerce_product_description_heading" , "__return_false");
add_filter("woocommerce_product_additional_information_heading" , "__return_false");
add_filter("woocommerce_reviews_title" , "__return_false");


//add_filter( 'woocommerce_product_get_rating_html', 'mind_single_product_rating', 10, 3 );
//function mind_single_product_rating( $html, $rating, $count ){
//	// filter...
//	wc_print_r($html);
//	return $html;
//}





