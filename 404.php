<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */

get_header(); ?>
<div class="row-fluid">

	<div id="leftColumn" class="span3">
		<div class="well sidebar-nav">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<div id="bodyColumn" class="span9">

		<article id="post-0" class="post error404 not-found">
			<div class="section">
				<header class="entry-header">
					<h1 class="entry-title">
						<?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'fluido' ); ?>
					</h1>
				</header>

				<div class="entry-content">
					<p>
						<?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'fluido' ); ?>
					</p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

					<div class="widget">
						<h2 class="widgettitle">
							<?php _e( 'Most Used Categories', 'fluido' ); ?>
						</h2>
						<ul>
							<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						</ul>
					</div>

					<?php
					/* translators: %1$s: smilie */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'fluido' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div>
				<!-- .entry-content -->
			</div>
		</article>
		<!-- #post-0 -->

	</div>
	<!-- #content -->
</div>

<?php get_footer(); ?>