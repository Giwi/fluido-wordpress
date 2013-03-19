<?php
/**
 * Fluido Theme Options
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */
add_action( 'admin_init', 'fluidoThemeRegisterSettings' );

function fluidoThemeRegisterSettings( )
{
	register_setting( 'fluido', 'github_link' );
	register_setting( 'fluido', 'twitter_link' );
	register_setting( 'fluido', 'facebook_link' );
	register_setting( 'fluido', 'flickr_link' );
	register_setting( 'fluido', 'googleplus_link' );
	register_setting( 'fluido', 'linkedin_link' );
	register_setting( 'fluido', 'mySpace_link' );
	register_setting( 'fluido', 'pinterest_link' );
	register_setting( 'fluido', 'vimeo_link' );
	register_setting( 'fluido', 'youtube_link' );
	register_setting( 'fluido', 'logo' );
	register_setting('fluido', 'featured_posts_category');
	register_setting('fluido', 'thread_comments');


}

add_action( 'admin_menu', 'fluidoThemeAdminMenu' );

function fluidoThemeAdminMenu( )
{
	add_theme_page(
	'Fluido options', // le titre de la page
	'Fluido',            // le nom de la page dans le menu d'admin
	'administrator',        // le rôle d'utilisateur requis pour voir cette page
	'fluido-page',        // un identifiant unique de la page
	'fluidoThemeSettingsPage'  // le nom d'une fonction qui affichera la page
	);
}

function fluidoThemeSettingsPage( )
{
	?>
<div class="wrap">
	<h2>Fluido options</h2>

	<form method="post" action="options.php">
		<?php
		// cette fonction ajoute plusieurs champs cachés au formulaire
		// pour vous faciliter le travail.
		// elle prend en paramètre le nom du groupe d'options
		// que nous avons défini plus haut.

		settings_fields( 'fluido' );
		?>
		<h3>Main options</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="featured_posts_category">featured_posts_category</label>
				</th>
				<td><input type="text" id="featured_posts_category" name="featured_posts_category"
					value="<?php echo get_option( 'featured_posts_category' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="thread_comments">thread_comments</label>
				</th>
				<td><input type="text" id="thread_comments" name="thread_comments"
					value="<?php echo get_option( 'thread_comments' ); ?>" /></td>
			</tr>


		</table>
		<h3>Links options</h3>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="logo">logo link</label>
				</th>
				<td><input type="text" id="logo" name="logo"
					value="<?php echo get_option( 'logo' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="github_link">github link</label>
				</th>
				<td><input type="text" id="github_link" name="github_link"
					value="<?php echo get_option( 'github_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="twitter_link">Twitter link</label>
				</th>
				<td><input type="text" id="twitter_link" name="twitter_link"
					value="<?php echo get_option( 'twitter_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="facebook_link">facebook link</label>
				</th>
				<td><input type="text" id="facebook_link" name="facebook_link"
					value="<?php echo get_option( 'facebook_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="flickr_link">flickr link</label>
				</th>
				<td><input type="text" id="flickr_link" name="flickr_link"
					value="<?php echo get_option( 'flickr_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="googleplus_link">googleplus link</label>
				</th>
				<td><input type="text" id="googleplus_link" name="googleplus_link"
					value="<?php echo get_option( 'googleplus_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="linkedin_link">linkedin link</label>
				</th>
				<td><input type="text" id="linkedin_link" name="linkedin_link"
					value="<?php echo get_option( 'linkedin_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="mySpace_link">mySpace link</label>
				</th>
				<td><input type="text" id="mySpace_link" name="mySpace_link"
					value="<?php echo get_option( 'mySpace_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="pinterest_link">pinterest link</label>
				</th>
				<td><input type="text" id="pinterest_link" name="pinterest_link"
					value="<?php echo get_option( 'pinterest_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="vimeo_link">vimeo link</label>
				</th>
				<td><input type="text" id="vimeo_link" name="vimeo_link"
					value="<?php echo get_option( 'vimeo_link' ); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="youtube_link">youtube link</label>
				</th>
				<td><input type="text" id="youtube_link" name="youtube_link"
					value="<?php echo get_option( 'youtube_link' ); ?>" /></td>
			</tr>


		</table>

		<p class="submit">
			<input type="submit" class="button-primary" value="Update" />
		</p>
	</form>
</div>
<?php
}