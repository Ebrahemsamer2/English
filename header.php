<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' | ' , true , 'right') . bloginfo('title'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
	<link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>" >
	<?php wp_head(); ?>
</head>
<body>