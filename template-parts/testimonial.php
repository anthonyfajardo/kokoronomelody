<?php
/**
 * Template part for displaying testimonials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

?>

<?php  
	$testimonial = new WP_Query(array(
		'post_type'	=> 'testimonial'
	));
?>



<?php if ( $testimonial->have_posts() ) : ?> 
	<?php 
		$bgStyles = get_sub_field('background');

		if($bgStyles == "Color"){
			$bgColor = get_sub_field('background_color');

			echo '<section class="testimonial-wrapper" style="background-color: '. $bgColor . '">';

		}elseif($bgStyles == 'Image'){
			$bgImage = get_sub_field('background_image');
			echo '<section class="testimonial-wrapper" style="background: url('. $bgImage['url'] . '); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">';
		}
	?>

	<?php $textColor = get_sub_field('text_color'); ?>

	<h2 class="testimonial-title" style="color: <?php echo $textColor; ?> "><?php echo get_sub_field('testimonial_header_title'); ?></h2>

	<div class="testimonial-container" style="color: <?php echo $textColor; ?> ">
		<?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>
			<div class="testimonial">
				<?php the_content(); ?>
				<h4>- <?php the_title(); ?></h4>
			</div> <!-- /.testimonial -->
			
		<?php endwhile; ?>
	</section>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>		
<?php endif; ?>