<?php  if(!defined("ABSPATH")) exit; ?>
<?php
//if(is_front_page()): ?>
<?php //  endif; ?>
<?php  $background_img_url  =  get_theme_mod('header_background');

?>
<section class="container-header-background" id="topHeaderAnchorForScroll">
	<?php  if(!is_404()) :
        if(null !== $background_img_url && isset($background_img_url) && !empty($background_img_url) ) :
     $background_style = "background-image: url('". $background_img_url ."') ;";
	 $background_style .=  "  background-repeat: no-repeat;background-size: cover;background-position: left top;  ";
        ?>
        <div style="<?php  echo $background_style;  ?>" class="main-header-img-custom-background"></div>
	<?php endif; endif;  ?>
    <div class="container container-header">
	    <div class="row">
		    <header class="col-12">