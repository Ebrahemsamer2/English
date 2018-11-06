<?php 
	/*
		Template Name: Courses page
	*/
get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id());
?>
<?php if( has_post_thumbnail() ) { ?>
		<section class="page-header" style="background-image: url(<?php echo $thumbnail_url; ?>); background-repeat: no-repeat; height: 200px;">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</section>
<?php }else { ?>
		<section class="page-header default-courses-image">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</section>
<?php } ?>
<?php   
$args = array(
	'post_type' => 'courses_' ,
	'tax_query ' => array(
		'taxonomy ' => 'English'
	)
);
?>
<section class="courses">
<?php
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ) {
		while( $loop->have_posts() ) { $loop->the_post(); ?>
			<div class="course">
				<span><?php the_field('payment'); ?></span>
				<?php if(has_post_thumbnail()): the_post_thumbnail(); endif; ?>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p class="the_excerpt"><?php the_excerpt(); ?></p>
			</div>
		<?php }
		echo "<div class='clearfix'></div>";
	}
?>
</section>
<?php get_footer(); ?>
