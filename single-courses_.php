<?php get_header(); ?>
<header class="course-header">
	<?php while( have_posts() ) : the_post(); ?>
		<?php the_post_thumbnail(); ?>
		<div class="course-info">
			<h4 class="course-title"><?php the_title(); ?></h4>
			<?php the_excerpt(); ?>
			<ul class="info-list">
				<li>Author: <span><?php the_author(); ?></span></li>
				<li>Date: <span><?php the_date(); ?></span></li>
				<li>Lessons: 24 Lesson</li>
				<li>Price: <span class="single-course-price"><?php the_field('payment'); ?></span></li>
				<li>Quizes: <span>20 Quiz + Final Exam</span></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	<?php endwhile; ?>
	<?php wp_reset_postdate(); ?>
</header>
<section class="course-content">
	<h3>Course Lessons</h3>
	<?php $loop = new WP_Query('post_type' => 'lessons' , 'orderby' => 'post_id' , 'order' => 'ASC'); ?>

</section>
<?php get_footer(); ?>