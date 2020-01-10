<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mind
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

			<section class="error-404 not-found  col-12 col-md-7 col-lg-8">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mind' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mind' ); ?></p>
                    <div class="search-form-wrapper-404-page">
                        <?php
                        get_search_form();
                        ?>
                    </div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

            <div id="sidebar" class="sidebar sidebar-404 col-12 col-md-5 col-lg-4">
               <?php  the_widget( 'WP_Widget_Recent_Posts' ); ?>

                <div class="widget widget_categories">
                    <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'mind' ); ?></h2>
                    <ul>
			            <?php
			            wp_list_categories( array(
				            'orderby'    => 'count',
				            'order'      => 'DESC',
				          //  'show_count' => 1,
				            'title_li'   => '',
				            'number'     => 10,
			            ) );
			            ?>
                    </ul>
                </div><!-- .widget -->

	            <?php
	            /* translators: %1$s: smiley */
	            $mind_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'mind' ), convert_smilies( ':)' ) ) . '</p>';
	            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$mind_archive_content" );

	            the_widget( 'WP_Widget_Tag_Cloud' );
	            ?>

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
