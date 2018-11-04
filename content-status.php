<?php 
	// Advanced Custom Fields ( Status Section )
	$image1 = get_field('image1');
	$number1 = get_field('number1');
	$title1 = get_field('title1');

	$image2 = get_field('image2');
	$number2 = get_field('number2');
	$title2 = get_field('title2');

	$image3 = get_field('image3');
	$number3 = get_field('number3');
	$title3 = get_field('title3');

	$image4 = get_field('image4');
	$number4 = get_field('number4');
	$title4 = get_field('title4');
?>
<section class="status">
	<div class="courses">
		<img alt="Courses Number" src="<?php echo $image1['url']; ?> " width="100" height="100">
		<p><?php echo $number1 . ' ' . $title1; ?> </p>
	</div>
	<div class="quizes">
		<img alt="Quizes Numbers" src="<?php echo $image2['url']; ?> " width="100" height="100">
		<p><?php echo $number2 . ' ' . $title2; ?></p>
	</div>
	<div class="students">
		<img alt="Students" src="<?php echo $image3['url']; ?> " width="100" height="100">
		<p><?php echo $number3 .' ' . $title3; ?></p>
	</div>
	<div class="followers">
		<img alt="Followers" src="<?php echo $image4['url']; ?> " width="100" height="100">
		<p><?php echo $number4 .' ' . $title4; ?></p>
	</div>
	<div class="clearfix"></div>
</section>