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





