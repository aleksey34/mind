<?php
/**
 * Template part for displaying posts
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
<article id="post-<?php the_ID(); ?>" <?php post_class("col-12  $page_type_class"); ?>>
    <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
?>

	</header><!-- .entry-header -->


   <div class="entry-thumbnail-entry-meta">
	   <?php mind_post_thumbnail();

       if ( 'news' === get_post_type() ) :
       ?>
       <div class="entry-meta">
		   <?php
		   mind_posted_on();
		   mind_posted_by();
		   echo "</br>";
		   //esc_html_e("Categories: ");
		   echo "Категории: ";
		   echo  get_the_category_list(' ');
		   ?>
       </div><!-- .entry-meta -->
       <?php endif; ?>
   </div>





	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( ' ...continue reading...<span class="screen-reader-text"> "%s"</span>', 'mind' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
       ?>
		<?php  if ( is_singular() ) :
			$singular_pagepart_pagination= "";
			$singular_pagepart_pagination = wp_link_pages( array(
				'before' => '<div class="page-links nav-links">'  ,
				'after'  => '</div>',
				'nextpagelink'     => '',
				'previouspagelink' => '',
				'echo'   => 0,
			) );
			if( null !== $singular_pagepart_pagination  &&  isset($singular_pagepart_pagination) && !empty($singular_pagepart_pagination)) :
				?>
                <div class="pagination-wrapper">
                    <h5 class="pagination-page_title"><?php  esc_html_e( 'Pages:', 'mind' ) ?></h5>
                    <div class="pagination navigation">
						<?php
						echo $singular_pagepart_pagination;
						?>
                    </div>
                </div>
			<?php
			endif;
		endif; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php   mind_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
