<?php
	// Advanced Custom Fields ( Feature Section )
	$feature_title = get_field('feature_section_title');

	$feature1_title = get_field('feature1_title');
	$feature1_description = get_field('feature1_description');
	$feature1_icon = get_field('feature1-icon');

	$feature2_title = get_field('feature2_title');
	$feature2_description = get_field('feature2_description');
	$feature2_icon = get_field('feature2-icon');

	$feature3_title = get_field('feature3_title');
	$feature3_description = get_field('feature3_description');
	$feature3_icon = get_field('feature3-icon');
?>
<section id="features" class="features text-center">
	<h2 class="text-center"><?php echo $feature_title; ?></h2>
	<div class="feature">
		<h4><?php echo $feature1_title; ?></h4>
		<img alt="Feature Icon" width="100" height="100" src="<?php echo $feature1_icon['url'] ?> ">
		<p><?php echo $feature1_description; ?></p>
	</div>
	<div class="feature">
		<h4><?php echo $feature2_title; ?></h4>
		<img alt="Feature Icon" width="100" height="100" src="<?php echo $feature2_icon['url'] ?> ">
		<p><?php echo $feature2_description; ?></p>
	</div>
	<div class="feature">
		<h4><?php echo $feature3_title; ?></h4>
		<img alt="Feature Icon" width="100" height="100" src="<?php echo $feature3_icon['url'] ?> ">
		<p><?php echo $feature3_description; ?></p>
	</div>
	<div class="clearfix"></div>
</section>