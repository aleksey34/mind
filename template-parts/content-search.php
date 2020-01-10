<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mind
 */

?>
<?php  if ( is_singular() ){
	$page_type_class = "single-post-page";
} else{
	$page_type_class = "archive-post-page";
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("col-12 $page_type_class"); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


	</header><!-- .entry-header -->


    <div class="entry-thumbnail-entry-meta">

		<?php mind_post_thumbnail();

		if ( 'post' === get_post_type() || "freebie" === get_post_type() || "news" === get_post_type() ) :
			?>
            <div class="entry-meta">
				<?php
				mind_posted_on();
				mind_posted_by();
				?>
            </div><!-- .entry-meta -->
		<?php endif; ?>
    </div>



	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php mind_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
