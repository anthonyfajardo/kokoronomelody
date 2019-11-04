<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kokoronomelody
 */

get_header();
?>

<div class="blog-wrapper">

	<section id="primary" class="content-area blog">
		<main id="main" class="site-main blog-page">

		<?php if ( have_posts() ) : ?>
			<section class="content-wrapper">
				<header class="page-header search-header">
					<h4 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'kokoronomelody' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h4>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

				<?php  
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
				?>
				
				<?php	get_template_part( 'template-parts/content', 'search' ); ?>
				
				<?php endwhile; ?>

				<div class="pagination"><?php post_pagination(); ?></div>	

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				
			</section> <!-- /.content-wrapper -->
		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php if(have_posts()): ?>
		<?php get_sidebar(); ?> <!-- #aside -->
	<?php endif; ?>

</div> <!-- /.blog-wrapper -->
<?php get_footer();
