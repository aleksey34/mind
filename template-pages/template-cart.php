<?php
/*
Template Name:Template Cart
*/

get_header();
// without sidebar
?>
<div class="container-fluid without-sidebar">
    <div class="row">
        <div class="col-12" >

<?php
if(have_posts()):

while(have_posts()):  the_post();
?>


   <?php
    the_title( '<h1 class="entry-title cart-page-title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
?>

<?php  the_content();   ?>


<?php
endwhile;
else:
?>
<!--  <h2>Еце корзина пуста.</h2>-->
<?php  endif; ?>
        </div>
    </div>
</div>



<?php
get_footer() ;
