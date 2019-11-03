<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kokoronomelody
 */

get_header();
?>
<div class="blog-wrapper">
	<div id="primary" class="content-area blog">
		<main id="main" class="site-main single-blog">
			<section class="content-wrapper">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() ); ?>

					<?php 
						the_post_navigation( array(
							'prev_text'                  => __( '<span class="blog-nav-text"><< Previous</span><span class="blog-nav-title">%title</span>' ),
							'next_text'                  => __( '<span class="blog-nav-text">Next >> </span><span class="blog-nav-title">%title</span>' ),
							'taxonomy'                   => __( 'post_tag' ),
							'screen_reader_text' => __( 'Continue Reading' ),		
						)); 

					?>
					
					
					<?php 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</section> <!-- /.content-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div> <!-- /.blog-wrapper -->
<?php get_footer(); ?>

