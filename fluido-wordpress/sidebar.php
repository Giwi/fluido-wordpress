<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */

?>
	<ul class="nav nav-list">
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
		<li class="nav-header"><?php _e( 'Archives', 'fluido' ); ?></li>
		<li><?php wp_get_archives( array( 'type' => 'monthly' ) ); ?></li>
		<li class="nav-header"><?php _e( 'Meta', 'fluido' ); ?></li>
				<li><?php wp_register(); ?></li>
				<li><?php wp_loginout(); ?></li>
				<li><?php wp_meta(); ?></li>
		</li>
	<?php endif; // end sidebar widget area ?>
	</ul>
