<?php
/*
OLD___Template Name:Template Front Page
*/

get_header();

?>
<?php
//section for alert
get_template_part('template-parts/front-page/alert-section');
?>

<?php  // _________________ПЕРВАЯ СЕКЦИЯ____________________TOP  ?>
<?php

//echo do_shortcode("[front_page_intro]");

//get_template_part('template-parts/front-page/intro-section'); ?>


<?php  // _________________ВТОРАЯ СЕКЦИЯ____________________BENEFIT ?>
<?php //  get_template_part('template-parts/front-page/benefit-section'); ?>


<?php  // _________________ТРЕТИЯ СЕКЦИЯ____________________NEWS  ?>
<?php // get_template_part('template-parts/front-page/news-section'); ?>


<?php  // _________________ЧЕТВЕРТАЯ СЕКЦИЯ____________________POSTS ?>
<?php //  get_template_part('template-parts/front-page/posts-section'); ?>

<?php  //n_______ 5 section______________testimonial ?>
<?php // get_template_part('template-parts/front-page/testimonials-section'); ?>

<?php  //_________________6 СЕКЦИЯ____________________PRODUCTS ?>
<?php // get_template_part('template-parts/front-page/products-section'); ?>


<?php // _________________7 СЕКЦИЯ____________________section testimonial   QUOTES!! ?>
<?php //  get_template_part('template-parts/front-page/quotes-section'); ?>


<?php  // _________________8 СЕКЦИЯ____________________TEACHERS ?>
<?php //  get_template_part('template-parts/front-page/teachers-section'); ?>


<?php   // _________________9СЕКЦИЯ____________________PARTNERS ?>
<?php // get_template_part('template-parts/front-page/partners-section'); ?>


<?php // _________________10СЕКЦИЯ____________________BOOKS ?>
<?php // get_template_part('template-parts/front-page/books-section'); ?>

<?php // _________________11СЕКЦИЯ____________________ MAP ?>
<?php //  get_template_part('template-parts/front-page/map-section'); ?>


<?php
get_footer() ;
?>