 <div class="clients-section-wrapper section-wrapper">
 	<div class="client-section-meta">
 		<h2><?php the_sub_field('client_section_title') ?></h2>
 		<p><?php the_sub_field('client_section_description'); ?></p>
 	</div>
 	<div class="client-section-gallery">
 		<?php $images = get_sub_field('clients_logo'); ?>
 		<?php if($images): ?>
 			<?php foreach($images as $image): ?>
 				<div class="client-logo" style="background: url(<?php echo $image; ?>); background-size: contain; background-position: center; background-repeat: no-repeat;"></div>
 			<?php endforeach; ?>
 		<?php endif; ?>
 	</div>
 </div>