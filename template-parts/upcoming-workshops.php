<?php 
	$upcomingWorkshops = new WP_Query(array(
		'post_type'	=> 'workshops'
	));
?>

<?php if ( $upcomingWorkshops->have_posts() ) : ?> 
	<?php while ( $upcomingWorkshops->have_posts() ) : $upcomingWorkshops->the_post(); ?>
		<h4 class="workshop-title"><?php the_title(); ?></h4>
	<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>		
<?php endif; ?>