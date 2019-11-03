<?php
/**
 * Template part for displaying upcoming workshops
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

?>



<?php 

	$params = array(
		'post_type'		=> 'workshops',
		'posts_per_page' => -1,
		'meta_key'		=> 'workshop_date',
		'orderby'		=> 'meta_value_num',
		'order'			=> 'ASC',
		'meta_value'	=> date("omd"),
		'meta_compare'	=> '>='
	);

	$upcomingWorkshops = new WP_Query($params);
?>


<?php if ( $upcomingWorkshops->have_posts() ) : ?> 
	<h2 class="workshop-page-title">Upcoming Workshops</h2>
	<div class="workshop-wrapper">
		<?php while ( $upcomingWorkshops->have_posts() ) : $upcomingWorkshops->the_post(); ?>
			<div class="workshop-container">
				<a href="<?php  the_field('workshop_link'); ?>" target="_blank" class="workshop-image-wrapper">
					<header class="workshop-image" style="background: url(<?php echo featured_image_url($upcomingworkshops); ?>); background-size:cover; background-position: center;"></header>
				</a>	

				<div class="workshop-meta">
					<a href="<?php the_field('workshop_link'); ?>">
						<h3 class="workshop-title"><?php the_title(); ?></h3>
					</a>
					<div class="workshop-date-time">
						<?php 
							$date_str = get_field('workshop_date');
							$myDate = DateTime::createFromFormat('Ymd', $date_str);
							$newDate = $myDate->format('F d, Y');
						?>


						<span class="date"><i class="fal fa-calendar-alt"></i> <?php echo $newDate; ?> </span>
						<span class="time">
							<i class="fal fa-clock"></i>
							<span class="time">
								<?php the_field('start_time') ?> - <?php the_field('end_time'); ?></span>
						</span>

					</div>					
				</div> <!-- /.workshop-meta -->
				<div class="workshop-info">
					<div class="workshop-content">
						<?php the_content(); ?>
					</div>
					<div class="workshop-link"><a href="<?php the_field('workshop_link') ?>">
						<?php the_field('workshop_cta_text'); ?>
					</a></div>					
				</div>
			</div> <!-- /.workshop-container -->
		<?php endwhile; ?>
	</div>
		<?php wp_reset_postdata(); ?>
	<?php else: ?>		
<?php endif; ?>