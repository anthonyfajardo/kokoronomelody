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

	<?php if(has_post_thumbnail()): ?>
	<header class="entry-header has-banner" style="background: url(<?php echo featured_image_url($post);?>); background-position: center; background-size: cover; background-repeat: no-repeat;">

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
			
			<!-- taglines -->
			<?php if(get_row_layout() == 'tagline'): ?>

				<?php  
					$tagFields = get_sub_field('tagline_fields');

					if($tagFields){
						
						foreach($tagFields as $tagField){

							if($tagField == 'Title'){ 
								echo '<h2>'.get_sub_field('tagline_title').'</h2>';
							}elseif($tagField == 'Message'){
								echo '<p>'.get_sub_field('tagline_content').'</p>';
							}elseif($tagField == 'Call to Action'){
								echo '<a href="'. get_sub_field('call_to_action_link') . '">' . get_sub_field('call_to_action_text') . '</a>';
							}

						}
					
					}
				?>
				
			<!-- Section Content -->
			<?php elseif(get_row_layout() == 'section_content'): ?>
				<?php 

					$columns = get_sub_field('columns');
					if($columns == 1){ 
						echo '<p>one column</p>';
					}elseif($columns == 2){
						echo '<p>two columns</p>';
					}elseif($columns == 3){
						echo '<p>three columns</p>';
					}


				?>





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
