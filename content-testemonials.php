<?php 
	// Advanced Custom Fields ( Testimonials Section )
	$testimonial_title = get_field('title');
?>

<section class="testimonials">
	<?php 
		$args = array(
			'post_type' => 'testimonials_',
			'orderby' => 'post_id',
			'order' => 'ASC'
		);
		$loop = new WP_Query( $args );

		if ( $loop->have_posts() ) : 
			echo "<h2 class='text-center'>". $testimonial_title ."</h2>";
			while( $loop->have_posts() ) : $loop->the_post();
			?>
				<div class="testimonial text-center">
					<blockquote><?php the_content(); ?></blockquote>
					<?php the_post_thumbnail(); ?>
					<cite>&mdash;<?php the_title(); ?></cite>
				</div>
			<?php 
			endwhile;
			wp_reset_postdata();
		endif;
		echo '<div class="clearfix"></div>';
	?>
</section>