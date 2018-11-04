<?php 
	$logo_image = get_field('logo');
?>
<nav>
	<img width="80" height="80" class="logo" alt="<?php echo $logo_image['alt'] ?>" src="<?php echo $logo_image['url'] ?>">
	<?php wp_nav_menu(); ?>
	<div class="clearfix"></div>
</nav>
