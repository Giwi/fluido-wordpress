<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section">
		<header class="entry-header">
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
		</header>
		<!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'fluido' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div>
		<!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'fluido' ), '<span class="edit-link">', '</span>' ); ?>
		</footer>
		<!-- .entry-meta -->
	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->
