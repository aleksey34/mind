<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mind
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("col-12"); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php mind_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

//		wp_link_pages( array(
//			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mind' ),
//			'after'  => '</div>',
//		) );
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

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'mind' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
