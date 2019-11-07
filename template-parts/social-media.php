<?php  
	$socialMedia = new WP_Query(array(
		'pagename'	=> 'social-media'
	));
?>



<?php if ( $socialMedia->have_posts() ) : ?> 
	<div class="social-media-wrapper">
		<?php while ( $socialMedia->have_posts() ) : $socialMedia->the_post(); ?>
			 
			 <?php if(have_rows('social_media_list')): ?>
			 	<?php while(have_rows('social_media_list')): the_row(); ?>
					<a href="<?php the_sub_field('link'); ?>" class="<?php echo strtolower(get_sub_field('name')).'-button'; ?>">
						<?php the_sub_field('icon'); ?>
					</a>
					
			 	<?php endwhile; ?>
			 <?php endif; ?>


		<?php endwhile; ?>
	</div> <!-- /.social-media-wrapper -->
		<?php wp_reset_postdata(); ?>
	<?php else: ?>		
<?php endif; ?>