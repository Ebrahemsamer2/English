<?php $args = array(
			'posts_per_page'   => 10,
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
					<div class="course text-center">
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"> <?php echo get_the_title(); ?></a></h3>
						<?php the_post_thumbnail('large'); ?>
						<?php echo the_content(); ?>
					</div>
				<?php }
				echo "<div class='clearfix'></div>";
				wp_reset_postdata();
		}
		?>