<?php 
	/*
		Template Name: Home Page
	*/
?>

<?php get_header(); ?>

<div class="container">
	<?php get_template_part('content' , 'header'); ?>

	<?php get_template_part('content' , 'features'); ?>

	<?php get_template_part('content' , 'status'); ?>

	<?php get_template_part('content' , 'testemonials') ?>
	<?php ?>
	<section class="last-courses ">
		<h2 class="text-center">Lastest Courses</h2>
		<?php $args = array(
			'posts_per_page'   => 2,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => 'course',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   => '',
			'author_name'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true,
			'fields'           => '',
		);
		$posts_array = new WP_Query( $args );
		if ( $posts_array->have_posts() ) {	
			while( $posts_array->have_posts()) {
				$posts_array->the_post(); ?>
				<div class="latest-course">
					<h3 class="latest-course-title"><?php echo get_the_title(); ?> </h3>
					<?php echo the_content(); ?>
				
				</div>
			<?php }
			echo "<div class='clearfix'></div>";
			wp_reset_postdata();
		}
		?>
	</section>

</div>
	<?php get_footer(); ?>

