<?php

if(!defined("ABSPATH")) exit;
// chech  ajax
//if( wp_doing_ajax() ){}

add_action('wp_ajax_search-ajax', 'mind_ajax_search_callback');
add_action('wp_ajax_nopriv_search-ajax', 'mind_ajax_search_callback');

function mind_ajax_search_callback(){

	if(!wp_verify_nonce($_POST['nonce'] , 'ajax_search_nonce' )){
		 wp_die("Something went wrong");
	}


	$args =  array(
		//"post_type"=> array("post" , "product" ),
		"post_type"=> array("any" ),
		"post_status" => "publish",
		"s" => htmlspecialchars($_POST["s"])
	);

	$query_ajax = new WP_Query($args);

	$json_data =[];
	$json_data["out"] = "";
	// this is buffer for send to the  var
//$json_data["out"] = ob_start(PHP_OUTPUT_HANDLER_CLEANABLE); // remove "1" in start string
ob_start(); // remove "1" in start string

if($query_ajax->have_posts()){
	?>
	<ul class="search-result-list" >

	<?php
	while ($query_ajax->have_posts()){
	$query_ajax->the_post();
	?>
<li>
	<a href="<?php  the_permalink()  ; ?>">
		<?php
        $title_str = get_the_title();
        echo   strlen($title_str) < 45 ? $title_str : substr( $title_str , 0 , 43)."...";
        ?>
	</a>
</li>
<?php
    }
    ?>

	</ul>


		<?php
}

$json_data["out"] .= ob_get_clean();

if(empty($json_data["out"])) {
	$json_data["out"] = "<ul class=\"search-result-list\" ><li>Ничего не найдено</li></ul>";
}

//del "1" in start string
//if($json_data["out"][0]  == 1){
////	$json_data["out"]  = substr($json_data["out"] , 2);
////}

	wp_send_json($json_data) ; exit;



}

