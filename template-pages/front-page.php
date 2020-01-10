<?php
/*
OLD___Template Name:Template Front Page
*/

get_header();
//section for alert
get_template_part('template-parts/front-page/alert-section');
?>

<?php  // _________________ПЕРВАЯ СЕКЦИЯ____________________TOP  ?>
<?php  get_template_part('template-parts/front-page/top-section'); ?>


<?php  // _________________ВТОРАЯ СЕКЦИЯ____________________BENEFIT ?>
<?php  get_template_part('template-parts/front-page/benefit-section'); ?>


<div class="divider"></div>

<?php  // _________________ТРЕТИЯ СЕКЦИЯ____________________NEWS  ?>
<?php  get_template_part('template-parts/front-page/news-section'); ?>


<div class="divider"></div>

<?php  // _________________ЧЕТВЕРТАЯ СЕКЦИЯ____________________POSTS ?>
<?php  get_template_part('template-parts/front-page/posts-section'); ?>

<div class="divider"></div>

<?php  // _________________ПЯТАЯ СЕКЦИЯ____________________TEACHERS ?>
<?php  get_template_part('template-parts/front-page/teachers-section'); ?>

<div class="divider"></div>

<?php  //additional section -- testimonial ?>
<?php  get_template_part('template-parts/front-page/testimonials-section'); ?>

<div class="divider"></div>
<?php   // _________________6 СЕКЦИЯ____________________PARTNERS ?>
<?php  get_template_part('template-parts/front-page/partners-section'); ?>

<div class="divider"></div>

<?php  //_________________7 СЕКЦИЯ____________________PRODUCTS ?>
<?php  get_template_part('template-parts/front-page/products-section'); ?>

<div class="divider"></div>

<?php // _________________8 СЕКЦИЯ____________________section testimonial   QUOTES!! ?>
<?php  get_template_part('template-parts/front-page/quotes-section'); ?>

<div class="divider"></div>
<?php // _________________9 СЕКЦИЯ____________________BOOKS ?>
<?php  get_template_part('template-parts/front-page/books-section'); ?>

<div class="divider"></div>
<?php // _________________10 СЕКЦИЯ____________________ MAP ?>
<?php  get_template_part('template-parts/front-page/map-section'); ?>

<?php
get_footer() ;
?>