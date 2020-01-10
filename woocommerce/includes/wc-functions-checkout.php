<?php

if(!defined("ABSPATH")) exit;


add_filter("woocommerce_form_field_args" , "mind_checkout_fields_custom");
function mind_checkout_fields_custom($fields){

//get_wd($fields);
$fields["input_class"] = array("form-control");
	return $fields;
}

add_filter("woocommerce_default_address_fields" , "mind_address_fields_custom");

function mind_address_fields_custom($fields){
	//get_wd($fields);
	return $fields;
}

add_action("woocommerce_checkout_before_order_review_heading" , "mind_checkout_before_tag");
function mind_checkout_before_tag(){
	?>
<div class="row">

<?php
}
add_action("woocommerce_checkout_after_order_review" , "mind_checkout_after_tag");
function mind_checkout_after_tag(){
	?>
	</div>

<?php
}

/*
 * remove duplicate of string - "(необязательно)"
 */
add_filter("woocommerce_default_address_fields" , 'mind_default_address_fields');
function mind_default_address_fields($fields){
    $fields["address_2"]["placeholder"]= "Дополнительные сведения об адресе";
    return $fields;
}
