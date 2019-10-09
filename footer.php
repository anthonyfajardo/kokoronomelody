<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kokoronomelody
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">


			<div id="footerSidebar" class="footer-sidebar">

				<div class="footer-widget footer-sidebar-1">
					<?php if(is_active_sidebar('footer-1')): ?>
						<?php dynamic_sidebar('footer-1'); ?>
					<?php endif; ?>
				</div>
				<div class="footer-widget footer-sidebar-2">
					<?php if(is_active_sidebar('footer-2')): ?>
						<?php dynamic_sidebar('footer-2'); ?>
					<?php endif; ?>
				</div>
				<div class="footer-widget footer-sidebar-3">
					<?php if(is_active_sidebar('footer-3')): ?>
						<?php dynamic_sidebar('footer-3'); ?>
					<?php endif; ?>
				</div>
				<div class="footer-widget footer-sidebar-4">
					<?php if(is_active_sidebar('footer-4')): ?>
						<?php dynamic_sidebar('footer-4'); ?>
					<?php endif; ?>
				</div>				

			</div> <!-- /.footer-sidebar -->

			<div id="footerWide" class="footer-full">
				<div class="footer-widget-wide">
					<p>Copyright &copy; <?php echo get_the_date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>
				</div>				
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
