<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mind
 */

get_header();
?>

	<div id="primary" class="content-area container woocommerce-product-details__short-description">
        <div class="row">
            <main id="main" class="site-main col-12 col-md-7 col-lg-8">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

            </main><!-- #main -->
            <div id="sidebar" class="col-12 col-md-5 col-lg-4">
                <?php  get_sidebar(); ?>
            </div>
        </div>
	</div><!-- #primary -->

<?php

get_footer();
