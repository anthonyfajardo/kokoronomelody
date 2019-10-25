<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php  
		$banner = get_field('banner');
		$bannerImage = get_field('banner_image');
		$bannerVideo = get_field('banner_video');
	?>

	<?php if($banner == 'Image'): ?>
		<header class="entry-header has-banner" style="background: url(<?php echo $bannerImage['url']; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">

				<?php 
					$bannerTag = get_field('banner_tagline');
					if($bannerTag){
						echo '<div class="banner-tag">';
						echo '<h1 class="entry-title">'.$bannerTag.'</h1>';
						echo '</div>';
					}
				?>		

		</header>
	
	<?php endif; ?>
	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kokoronomelody' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->



	<!-- Custom Sections / Advanced Custom Fields Flexible Content -->

	<?php if(have_rows('page_sections')): ?>
		<?php while(have_rows('page_sections')): the_row(); ?>
			
			<!-- Section Content -->
			<?php if(get_row_layout() == 'section_content'): ?>
				<?php get_template_part('template-parts/section-content'); ?>
				
				
			<!-- Testimonial -->
			<?php elseif(get_row_layout() == 'testimonial'): ?>
				<?php get_template_part('template-parts/testimonial'); ?>
				

			<!-- Instagram Feed -->
			<?php elseif(get_row_layout() == 'instagram'): ?>
				<?php 
					$instagram = get_sub_field('instagram_shortcode');
				?>
				<section class="instagram">

					<div class="instagram-title">
						<?php  
							$instagramHandle = get_sub_field('instagram_handle');

							echo '<h3><a href="https://www.instagram.com/'. $instagramHandle .'">Follow</a> </h3>';
						?>
					</div>			

					
					<?php echo do_shortcode($instagram); ?>
				</section>
			
			<?php elseif(get_row_layout() == 'gallery_section'): ?>
				<section class="gallery">
					<?php get_template_part('template-parts/gallery'); ?>
				</section>
			
			<?php endif; ?>




		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'kokoronomelody' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
