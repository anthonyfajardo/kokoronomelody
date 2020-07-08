<?php 
	/* VARIABLES */
	$ordinalArray = ['first', 'second', 'third'];
	// echo $ordinalNum[0];
	$columns = get_sub_field('columns'); 
	$bgColor = get_sub_field('background_color');
	// echo '<p> Number of Columns: '.$columns.'</p>';
?>

<div class="section-wrapper">

	
	<!-- Loop for how many columns there are  -->
	<?php for($i = 0; $i < $columns; $i++): ?>
		<?php 
			$counter = $i+1; 

			/* sets which column it is.  first_column, second_column, third_column */
			$ordinalNum = $ordinalArray[$i].'_column';
			// echo '<p> Column Number: '.$ordinalNum.'</p>';
		?>
		<div class="section-container <?php echo 'column-'.$columns; ?>">
		<!-- If first_column, second_column, or third_column -->
		<?php if(have_rows($ordinalNum)): ?>
			<?php while(have_rows($ordinalNum)): the_row(); ?>
					
				<!-- Variables within the First, Second or Third Column 	 -->
				<?php 
					$content = get_sub_field('content'.$counter); 
					$image = get_sub_field('image'.$counter);
					$imageFields = get_sub_field('image_field');
					$imageTitle = get_sub_field('image_title_'.$counter);
					$imageCaption = get_sub_field('image_caption_'.$counter);
					$imageLink = get_sub_field('image_link');
					$textFields = get_sub_field('fields'.$counter);
					$title = get_sub_field('title'.$counter);
					$message = get_sub_field('message'.$counter);
					$sectionLink = get_sub_field('section_link_to');


				?>
				
				<!-- If content is an Image -->
				<?php if($content == 'image'): ?>
				<?php if($sectionLink){ echo '<a href="'. $sectionLink .'">' ;} ?>
					<div class="image-wrapper">
						<div class="image-container" style="background: url(<?php echo $image['url']; ?>); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
						<div class="caption-wrapper <?php if(!empty($imageFields)){ echo 'filtered';}?>">						
							<?php foreach($imageFields as $field): ?>
								<?php 
									if($field == 'Image Title'){ echo '<h2>'.$imageTitle.'</h2>';}
									if($field == 'Image Caption'){ echo $imageCaption;}
								?>
							<?php endforeach; ?>
						</div> <!-- /.caption-wrapper -->
					</div> <!-- /.image-wrapper -->		
				<?php if($sectionLink){ echo '</a>';} ?>
		

				<!-- If the content is Text only	 -->
				<?php elseif($content == 'text'): ?>
					<div class="text-wrapper">
						
						<?php foreach($textFields as $field): ?>
							<?php  
								// Show if Title is selected on the Field
								if($field == 'Title'){ echo '<h2>'.$title.'</h2>';}
								// Show if Message is selected on the Field
								if($field == 'Message'){ echo $message;}
							?>

							<!-- Show if Call to Action is selected on the Field -->
							<?php if($field == 'Call To Action'): ?>
								<?php if(have_rows('call_to_action')): ?>
									<?php while(have_rows('call_to_action')): the_row(); ?>
										<!-- CALL TO ACTION VARIABLES -->
										<?php  
											$ctaFields = get_sub_field('call_to_action_fields');
											$ctaForms = get_sub_field('cta_form_shortcode');
										?>
											<!-- If the Call to Action is a Form -->
											<?php if($ctaFields == 'Form'): ?> 
												<?php echo do_shortcode($ctaForms); ?>
											<!-- If the Call to Action is a Button -->
											<?php elseif($ctaFields == 'Button'): ?>
												<?php if(have_rows('cta_button')): ?>
													<div class="button-wrapper">
														<?php while(have_rows('cta_button')): the_row(); ?>
															
															<a href="<?php echo get_sub_field('cta_link') ?>"><?php echo get_sub_field('cta_text'); ?></a>

														<?php endwhile; ?>
													</div> <!-- /.button-wrapper -->
												<?php endif; ?>
											<?php endif; ?>
										
									<?php endwhile; ?>
								<?php endif; ?>
							<?php endif; ?>

						<?php endforeach; ?>
					</div> <!-- /.text-wrapper -->
				<?php endif; ?>


			<?php endwhile; ?>
		<?php endif; ?>
		</div> <!-- /.section-container -->
	<?php endfor; ?>
</div> <!-- /.section-wrapper -->
