<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Fluido
 * @since Fluido 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
/*
 * Print the <title> tag based on what is being viewed.
*/
global $page, $paged;

wp_title( '|', true, 'right' );

// Add the blog name.
bloginfo( 'name' );

// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
	echo " | $site_description";

// Add a page number if necessary:
if ( $paged >= 2 || $page >= 2 )
	echo ' | ' . sprintf( __( 'Page %s', 'fluido' ), max( $paged, $page ) );

?>
</title>
<script
	src="<?php echo get_template_directory_uri(); ?>/js/apache-maven-fluido-1.3.0.min.js"
	type="text/javascript"></script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/apache-maven-fluido-1.3.0.min.css" />
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/site.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="stylesheet"
	href="<?php echo get_template_directory_uri(); ?>/css/print.css"
	media="print" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/jdgallery/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
<script src="<?php echo get_template_directory_uri(); ?>/jdgallery/mootools.namespaced.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/jdgallery/jd.gallery.namespaced.js" type="text/javascript"></script>

<?php
/* We add some JavaScript to pages with the comment form
 * to support sites with threaded comments (when in use).
*/
if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );

/* Always have wp_head() just before the closing </head>
 * tag of your theme, or you will break many plugins, which
* generally use this hook to add elements to <head> such
* as styles, scripts, and meta tags.
*/
wp_head();
?>
</head>

<body>
	<?php if( get_option( 'github_link' ) != '') { ?>
	<a href="<?php echo  get_option( 'github_link', '' ); ?>" target="_blank"> <img
		style="position: absolute; top: 0; right: 0; border: 0; z-index: 12;"
		src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"
		alt="Fork me on GitHub">
	</a>
	<?php } ?>
	<div id="social-icons"
		style="display: inline-block; position: absolute; top: 80px; right: 100px; border: 0; z-index: 999;">
		<ul style="display: inline-block;">
			<?php if( get_option( 'twitter_link', '' ) != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'twitter_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Twitter.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'facebook_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'facebook_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Facebook.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'flickr_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'flickr_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Flickr.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'googleplus_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'googleplus_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Googleplus.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'linkedin_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'linkedin_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Linkedin.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'mySpace_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'mySpace_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/MySpace.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'pinterest_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'pinterest_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Pinterest.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'vimeo_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'vimeo_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Vimeo.png" />
			</a></li>
			<?php } ?>
			<?php if( get_option( 'youtube_link' , '') != '') { ?>
			<li style="display: inline-block;"><a
				href="<?php echo  get_option( 'youtube_link' ); ?>"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/Youtube.png" />
			</a></li>
			<?php } ?>
				<li style="display: inline-block;"><a
				href="<?php echo esc_url( home_url( '/' ) ); ?>/feed"><img
					src="<?php echo get_template_directory_uri(); ?>/images/social/RSS.png" />
			</a></li>
		</ul>
	</div>
	<div class="container-fluid">
		<div id="banner">
			<div class="pull-left">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img
					src="<?php echo  get_option( 'logo', '' ); ?>"
					alt="" />
				</a>
			</div>
			<div class="pull-right" style="margin-right: 100px;">
				<?php get_search_form(); ?>
			</div>
			<div class="clear">
				<hr />
			</div>
		</div>
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li id="publishDate"><a href="<?php echo get_option('home'); ?>"
					title="<?php _e( 'Home', 'fluido' ); ?>"><i class="none"></i>
						<?php _e( 'Home', 'fluido' ); ?> </a></li>
				<?php
				echo preg_replace('@\<li([^>]*)>\<a([^>]*)>(.*?)\<\/a>@i', '<li class="divider">|</li><li id="publishDate"><a$2><i class="none"></i>$3</a>', wp_list_pages('depth=1&echo=0&title_li=&'));
				?>
			</ul>
		</div>