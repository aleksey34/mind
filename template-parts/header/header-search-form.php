<?php
if(!defined("ABSPATH")) exit;
?>
<div class="header-search-form">
	<i class="fas fa-search"></i>
	<div class="header-search-form-wrap">
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>"  class="my-2 my-lg-0">
			<input type="text" autocomplete="off" value="<?php echo get_search_query() ?>" name="s" id="s" class="form-control mr-sm-2"  placeholder="<?php  esc_html_e('Search' , 'mind') ;  ?>" aria-label="Search">
			<div class="search-result"></div>
			<button type="submit" id="searchsubmit" value="найти" class=""><?php esc_html_e("Search" , "mind")   ?></button>
		</form>
	</div>
</div>