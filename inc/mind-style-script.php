<?php

if(!defined("ABSPATH")) exit;

/**
 * Enqueue scripts and styles.
 */
function mind_styles() {
	//wp_enqueue_style( 'mind-style', get_stylesheet_uri() );

//	fonts
	//wp_enqueue_style( 'fonts',  'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,400i,700&display=swap&subset=cyrillic' );
	wp_enqueue_style( 'fonts',  get_template_directory_uri(). '/assets/fonts/Roboto-fonts.css' );

	wp_enqueue_style( 'fontawesome-free-5.11.2-web',  get_template_directory_uri(). '/assets/fonts/fontawesome-free-5.11.2-web/css/all.css' );


	wp_enqueue_style( 'bootstrap-4.3.1', get_template_directory_uri() . '/assets/libs/bootstrap-4.3.1/dist/css/bootstrap.min.css' );

	wp_enqueue_style( 'mind-style', get_template_directory_uri() . '/assets/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'mind_styles' );

function mind_scripts() {


	wp_enqueue_script( 'mind-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mind-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$ajax_search_data = [
		"url"   => admin_url('admin-ajax.php'),
		"nonce" => wp_create_nonce("ajax_search_nonce")
		];


	wp_enqueue_script( 'bootstrap-4.3.1', get_template_directory_uri() . '/assets/libs/bootstrap-4.3.1/dist/js/bootstrap.bundle.min.js', array("jquery"), null, true );

	wp_enqueue_script( 'ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array("jquery"), null, true );
	wp_localize_script("ajax-search" , 'ajaxSearchData' , $ajax_search_data );

	wp_enqueue_script( 'mind-custom', get_template_directory_uri() . '/assets/js/custom.js', array("jquery"), null, true );


	$inlineRegLoginScript= '
	if(jQuery("body.logged-in").length == 0) {
	
	 function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }

                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
	}
	';

	wp_add_inline_script( "mind-custom", $inlineRegLoginScript );


}
add_action( 'wp_enqueue_scripts', 'mind_scripts' );


