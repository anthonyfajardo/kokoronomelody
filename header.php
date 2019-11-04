<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kokoronomelody
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kokoronomelody' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<?php if(is_home() || is_archive() || is_search() || is_page( $page = 'contact' )): ?>
			<nav id="site-navigation" class="main-navigation blog-nav">
		<?php else: ?>
			<nav id="site-navigation" class="main-navigation">
		<?php endif; ?>
		
			<div class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'primary'        => 'primary',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
