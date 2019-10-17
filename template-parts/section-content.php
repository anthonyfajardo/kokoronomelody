<!-- <?php  
	$columns = get_sub_field('columns');
?> -->
<!-- 

<?php 
	for($count = 0; $count < $columns; $count++){
		$counter = $count + 1;
		echo '<div class="wrapper">';
		echo '<h1>Count number is: '. $counter . '</h1>';
		echo '<h1>Column Number is: '. $columns .'</h1>';
		echo '</div>';
	}
?> -->

<!-- <div class="section-wrapper">
<?php for($count = 0; $count < $columns; $count++): ?>
	<?php $counter = $count + 1; ?>
	<?php 
		$section = 100;
		echo $section / $columns;
	?>
	<div class="section-container-<?php echo $counter; ?>">

		<?php 
			$fields = '$fields'. $counter; 
			echo 'field variable: '. $fields. '<br>';

			$sectionField = $fields;
			echo 'sectionField is '. $sectionField;
		?>

		<h2>Column Number is : <?php echo $counter; ?></h2>

			<?php dump($sectionField); ?>
	</div>
<?php endfor; ?>
</div> -->