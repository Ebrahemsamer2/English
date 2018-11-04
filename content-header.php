<?php 
	// Advanced Custom Fields ( Header Section )
	$greeting = get_field('greeting');
?>
<header>
	<?php include "navigation.php"; ?>
	<div class="intro text-center">
		<span><?php echo $greeting; ?></span>
		<p><?php bloginfo('description'); ?></p>
	</div>
	<?php get_sidebar('Header Search'); ?>
	<a href="#features"><i class="fa fa-chevron-down"></i></a>
</header>