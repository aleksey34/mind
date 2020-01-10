<?php
/*
Template Name:Template Checkout
*/

get_header();
// without sidebar
?>
<div class="container-fluid without-sidebar">
    <div class="row">
        <div class="col-12" >

<?php
if(have_posts()): ?>
<?php

while(have_posts()):  the_post();

if(is_wc_endpoint_url("order-received")) :  ?>
    <div class="container-fluid template-checkout-thanksyou">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-6 mx-auto">
				<?php endif;
?>



   <?php
    the_title( '<h1 class="entry-title cart-page-title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
?>

<?php  the_content();   ?>




<?php
	if(is_wc_endpoint_url("order-received")) : ?>
        </div>
        </div>
        </div>
	<?php   endif;

endwhile;

else:
?>
  <h2>Товары еще не выбраны.</h2>
<?php  endif; ?>
        </div>
    </div>
</div>



<?php
get_footer() ;
