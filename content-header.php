<?php 
	// Advanced Custom Fields ( Header Section )
	$greeting = get_field('greeting');
	$bg 	  = get_field('bg-image');
	$searchbar = get_field('searchbar');
?>
<?php if(empty($bg['url'])) { ?>
<header style="" class="header">
	<?php 
	}else {
?>
<header style="background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)) , url(<?php echo $bg['url']; ?>); background-size: cover; height: 100vh; width: 100%; " class="header-bg"> 
	<?php 
	}
	?>
	<?php include "navigation.php"; ?>
	<div class="intro text-center">
		<span><?php echo $greeting; ?></span>
		<p><?php bloginfo('description'); ?></p>
	</div>
	<?php
	if($searchbar) {
		get_sidebar('Header Search');
	} ?>
	<a href="#features"><i class="fa fa-chevron-down"></i></a>
</header>