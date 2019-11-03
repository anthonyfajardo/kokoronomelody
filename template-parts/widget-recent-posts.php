<?php  
	$recentPosts = new WP_Query(array(
		'post_type'		=> 'post',
		'posts_per_page'	=> 5
	));
?>

<?php if ( $recentPosts->have_posts() ) : ?> 
	<div class="recent-posts">
		<?php while ( $recentPosts->have_posts() ) : $recentPosts->the_post(); ?>
			<div class="recent-post-wrapper">
				<div class="recent-image">
					<?php  echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>	
				</div>				
				<div class="recent-info">
					<h4><?php the_title(); ?></h4>
					<span class="date"><?php echo get_the_date('F j, Y'); ?></span>
				</div>
				
			</div> <!-- /.recent-post-wrapper -->
			
		<?php endwhile; ?>
	</div> <!-- /.recent-posts -->
		<?php wp_reset_postdata(); ?>
	<?php else: ?>		
<?php endif; ?>