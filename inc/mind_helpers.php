<?php

if(!defined("ABSPATH")) exit;

if(!function_exists("get_pr")){


function  get_pr($var , $die = true){

    echo "<pre>";
    print_r($var);
    echo "</pre>";

    if($die) die;

    }

}


if(!function_exists("get_vd") ){

function get_wd($var , $die = true){

echo "<pre>";
var_dump($var);
echo "</pre>";

if($die) die;

    }
}

function get_num_ending($number , $ending_array){
$ending_array = ["" , "" , "надцать" , ""];
$number = $number%100;
	if($number >= 11 && $number <=19){
		$ending = $ending_array[2];
	}else{
		$i = $number%10;
		switch($i){

			case (1):
				$ending = $ending_array[0];
			break;

			case(2):
			case(3):
			case(4):
				$ending = $ending_array[1];
				break;

			default:
				$eding = $ending_array[3]; // ????


		}



	}


}

/**
 * Функция
 * @param $item_url
 *
 * @return mixed|string
 */
function art_social_icons( $item_url ) {

	$social_icons = apply_filters( 'art_social_icons', array(
		'codepen.io'      => 'codepen',
		'digg.com'        => 'digg',
		'dribbble.com'    => 'dribbble',
		'dropbox.com'     => 'dropbox',
		'facebook.com'    => 'facebook',
		'flickr.com'      => 'flickr',
		'foursquare.com'  => 'foursquare',
		'plus.google.com' => 'googleplus',
		'github.com'      => 'github',
		'instagram.com'   => 'instagram',
		'linkedin.com'    => 'linkedin-alt',
		'mailto:'         => 'mail',
		'pinterest.com'   => 'pinterest-alt',
		'getpocket.com'   => 'pocket',
		'polldaddy.com'   => 'polldaddy',
		'reddit.com'      => 'reddit',
		'skype.com'       => 'skype',
		'skype:'          => 'skype',
		'soundcloud.com'  => 'cloud',
		'spotify.com'     => 'spotify',
		'stumbleupon.com' => 'stumbleupon',
		'tumblr.com'      => 'tumblr',
		'twitch.tv'       => 'twitch',
		'twitter.com'     => 'twitter',
		'vimeo.com'       => 'vimeo',
		'vk.com'          => 'vk',
		'wordpress.org'   => 'wordpress',
		'wordpress.com'   => 'wordpress',
		'youtube.com'     => 'youtube',
	) );
	$item_label   = '';
	foreach ( $social_icons as $attr => $value ) {
		if ( false !== strpos( $item_url, $attr ) ) {
			$item_label = str_replace( $item_url, esc_attr( $value ), $item_url );
		}
	}

	return $item_label;
}




