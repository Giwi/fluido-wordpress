<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'sidebar-3'  )
		&& ! is_active_sidebar( 'sidebar-4' )
		&& ! is_active_sidebar( 'sidebar-5'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
<div id="breadcrumbs">
	<ul class="breadcrumb">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<li id="publishDate"><i class="none"></i>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</li><!-- #first .widget-area --><li class="divider">|</li>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<li id="publishDate"><i class="none"></i>
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</li><!-- #second .widget-area --><li class="divider">|</li>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
	<li id="publishDate"><i class="none"></i>
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
	</li><!-- #third .widget-area --><li class="divider">|</li>
	<?php endif; ?>
	</ul>
</div><!-- #supplementary -->
