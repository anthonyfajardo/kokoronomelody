<?php
/**
 * Template part for displaying image gallery
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kokoronomelody
 */

?>

<div class="gallery-container">

	<h2><?php the_sub_field('gallery_title'); ?></h2>

	<?php  
		$images = get_sub_field('gallery');
		if($images): ?>

		<div class="gallery-wrapper">
			<?php foreach($images as $image): ?>
				<div class="image" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
				</div>
			<?php endforeach; ?>
		</div>

	<?php endif; ?>


</div> <!-- /.gallery-container -->

