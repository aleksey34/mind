<?php
/*
Template Name:Template My Account
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
    the_title( '<h1 class="entry-title cart-page-title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
?>

<?php  the_content();   ?>

<?php
endwhile;
else:
?>
  <h2>Что-то пошло не так. Перезайдите.</h2>
<?php  endif; ?>
        </div>
    </div>
</div>



<?php
get_footer() ;
