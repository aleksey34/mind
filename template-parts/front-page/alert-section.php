<?php  if(!defined("ABSPATH")) exit; ?>
<?php
if(have_posts()){
	while (have_posts()){
		the_post();

		// show alert and any content for front page
		the_content();
	}
}
wp_reset_postdata();
//wp_reset_query();
