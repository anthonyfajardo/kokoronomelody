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
			
			<?php if ( have_posts() ) : ?> 
				<div class="contact-wrapper">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="contact-image" style="background: url(<?php echo featured_image_url($post); ?>); background-size: cover; background-position: center;"></div> 
						<div class="contact-content">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				</div> <!-- /.contact-wrapper -->
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
