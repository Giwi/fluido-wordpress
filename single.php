<?php
/**
 * The Template for displaying all single posts.
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
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<nav id="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'fluido' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'fluido' ) ); ?></span>
					</nav><!-- #nav-single -->
			<div class="section">
			<?php comments_template( '', true ); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>
