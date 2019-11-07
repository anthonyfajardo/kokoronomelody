<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

get_header();

?>

<!-- <?php if(is_home() && get_option('page_for_posts')): ?>
	<?php 
		$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
	    $featured_image = $img[0];
	?>
	<?php endif; ?>

	<?php if($featured_image): ?>
		<header class="entry-header has-banner" style="background: url(<?php echo $featured_image; ?>); background-position: center; background-size: cover; background-repeat: no-repeat;">
		</header>
	
	<?php endif; ?> -->

<div class="blog-wrapper">
	<div id="primary" class="content-area blog">
		<main id="main" class="site-main blog-page">


			<?php if ( have_posts() ) : ?> 
				<section class="content-wrapper"> 
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="blog-container">
							<a href="<?php the_permalink(); ?>" class="blog-image">
								<div class="featured-image" style="background: url(<?php echo featured_image_url($post); ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
									
								</div> <!-- /.featured-image -->
							</a>
							<div class="blog-info-wrapper">
								<a href="<?php the_permalink(); ?>">
									<h2><?php the_title(); ?></h2>
								</a>
								<div class="blog-info-meta">
									<div class="meta meta-icon">
										<img src="<?php echo bloginfo('url').'/wp-content/uploads/2019/10/folder.png'; ?>">
									</div>
									

									<div class="meta meta-category">
										<span>In </span><?php the_category(); ?>
									</div> <!-- /.meta-category -->

									<div class="meta meta-tag">
										<?php the_tags(); ?>
									</div> <!-- /.meta-tag -->

									<div class="meta meta-date">
										<?php echo get_the_date('F j, Y'); ?>
									</div> <!-- /.meta-date -->

									<div class="meta meta-comments">
										<a href="<?php the_permalink(); ?>/#comments">Leave a comment</a>
									</div>
									
								</div> <!-- /.blog-info-meta -->
								<div class="blog-content">
									<div class="blog-excerpt">
										<?php the_excerpt(); ?>	
									</div>							
									<div class="continue-reading">
										<h3><a href="<?php the_permalink(); ?>">Continue Reading</a></h3>
									</div>								
								</div>

							</div> <!-- /.blog-info-wrapper -->
						</div> <!-- /.blog-container -->
					<?php endwhile; ?>
					<div class="pagination"><?php post_pagination(); ?></div>	
				</section> <!-- /.blog-wrapper -->
			<?php else: ?>
				<div class="no-posts">
					<h1>Blog Posts Coming Very Soon!</h1>
					<p>Stay Tuned!</p>
				</div> <!-- /.no-posts -->
			<?php endif; ?>
		</main>
	</div>

	<?php if(have_posts()): ?>
		<?php get_sidebar(); ?>
	<?php endif; ?>
	
</div> <!-- /.blog-wrapper -->
<?php get_footer(); 

	