<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
<div class="clear">
				<hr />
			</div>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
