<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('blog-wrapper'); ?>>

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
			<div class="single-blog-content">
				<?php the_content(); ?>	
			</div>

		</div> <!-- /.blog-info-wrapper -->
	</div> <!-- /.blog-container -->	
</article><!-- #post-<?php the_ID(); ?> -->
