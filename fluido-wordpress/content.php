<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section">
		<?php if ( is_sticky() ) : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>"
				title="<?php printf( esc_attr__( 'Permalink to %s', 'fluido' ), the_title_attribute( 'echo=0' ) ); ?>"
				rel="bookmark"><?php the_title(); ?> </a>
		</h2>
		<h3 class="entry-format">
			<?php _e( 'Featured', 'fluido' ); ?>
		</h3>
		<?php else : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>"
				title="<?php printf( esc_attr__( 'Permalink to %s', 'fluido' ), the_title_attribute( 'echo=0' ) ); ?>"
				rel="bookmark"><?php the_title(); ?> </a>
		</h2>
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="breadcrumb">
			<?php fluido_posted_on(); ?>
		</div>
		<!-- .entry-meta -->
		<?php endif; ?>
		<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) {
			the_post_thumbnail(array(300,225), array("class" => "alignleft post_thumbnail"));
} ?>
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<p>
			<?php the_excerpt(); ?>
		</p>
		<?php else : ?>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fluido' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'fluido' ) . '</span>', 'after' => '</div>' ) ); ?>
		<?php endif; ?>

		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<?php $show_sep = false; ?>
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'fluido' ) );
				if ( $categories_list ):
				?>
				<li class="cat-links"><?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'fluido' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
				</li>
				<?php endif; // End if categories ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'fluido' ) );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
				<li class="divider">|</li>
				<?php endif; // End if $show_sep ?>
				<li class="tag-links"><?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'fluido' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true; ?>
				</li>
				<?php endif; // End if $tags_list ?>
				<?php endif; // End if 'post' == get_post_type() ?>

				<?php if ( comments_open() ) : ?>
				<?php if ( $show_sep ) : ?>
				<li class="divider">|</li>
				<?php endif; // End if $show_sep ?>
				<li class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'fluido' ) . '</span>', __( '<b>1</b> Reply', 'fluido' ), __( '<b>%</b> Replies', 'fluido' ) ); ?>
				</li>
				<?php endif; // End if comments_open() ?>
				<li class="divider">|</li>
				<?php edit_post_link( __( 'Edit', 'fluido' ), '<span class="edit-link">', '</span>' ); ?>
			</ul>
		</div>

	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->
