<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fluido
 */

get_header(); ?>
<div class="row-fluid">
	<div id="leftColumn" class="span3">
		<div class="well sidebar-nav">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<div id="bodyColumn" class="span9">
		<?php if(is_home() && !is_paged()) { include (TEMPLATEPATH . '/featured.php'); } ?>
		<?php
		if ( have_posts() ) :
			fluido_content_nav( 'nav-above' );
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			fluido_content_nav( 'nav-below' );
		 else : ?>

		<div class="section">
			<article id="post-0" class="post no-results not-found">
				<h2 class="entry-title">
					<?php _e( 'Nothing Found', 'fluido' ); ?>
				</h2>
				<p>
					<?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'fluido' ); ?>
				</p>
				<?php get_search_form(); ?>
			</article>
			<!-- #post-0 -->
		</div>
		<!-- .entry-content -->
		<?php endif; ?>
	</div>
	<!-- #content -->
</div>

<?php get_footer(); ?>
