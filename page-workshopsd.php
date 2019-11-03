<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h1>My Upcoming Workshops</h1>
			
			<section class="workshop-section">
				<?php get_template_part('template-parts/upcoming-workshops'); ?>
			</section>
	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
