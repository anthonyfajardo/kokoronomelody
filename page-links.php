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

	<div id="primary" class="content-area links-page">
		<main id="main" class="site-main links-wrapper">

			<div class="links-image">
				<?php the_post_thumbnail(); ?>
			</div> <!-- /.page-links -->
	
			<?php if(have_rows('links_list')): ?>
				<ul class="links-container">
					<?php while(have_rows('links_list')): the_row(); ?>
						<li>
							<a href="<?php the_sub_field('link_url') ?>"><?php the_sub_field('link_title'); ?></a>	
						</li>
					<?php endwhile; ?>
				</ul> <!-- /.links-wrapper -->
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
