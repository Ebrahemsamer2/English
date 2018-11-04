<?php 

	/* Adding Scripts files to Theme */
	function addScripts() {
		wp_deregister_script('jquery');
		wp_register_script('jquery-js', get_template_directory_uri() . '/js/jquery.js' , array(), false,true);
		wp_enqueue_script('jquery-js' , get_template_directory_uri() . '/js/main.js' ,array(),false,true);
		wp_enqueue_script('main-js' , get_template_directory_uri() . '/js/main.js' ,array(),false,true);
	}
	add_action('wp_enqueue_scripts' , 'addScripts');


	/* Adding stylesheet files to Theme */ 
	function addStyles() {
		wp_enqueue_style('main-css' , get_template_directory_uri() . '/css/main.css');
		wp_enqueue_style('fontawesome-css' , get_template_directory_uri() . '/css/font-awesome.min.css');
	}
	add_action('wp_enqueue_scripts' , 'addStyles');



	/* Enable Theme Features */
	add_theme_support('post-thumbnails');  // post image

	$post_formats = array('aside','video','image','audio','status','link');
	add_theme_support('post-formats' , $post_formats); // post-formats

	function add_menu() { // menus
		register_nav_menu('header-menu' , __('Header Menu'));
	}
	add_action('init' , 'add_menu');


	
	// Registering a widgets
	 $args = array(
		'name'          => __( 'Header Search', 'theme_text_domain' ),
		'id'            => 'header-search',    // ID should be LOWERCASE  ! ! !
		'description'   => 'This Header Search will be a search for where you can find whar you looking for.',
	    'class'         => '' );
	register_sidebar( $args );
	

	// Custom excerpt length
	if( ! function_exists( 'prefix_custom_excerpt_length' ) ) {
	    function prefix_custom_excerpt_length( $length )
	    {
	        return 100;
	    }
	}
	add_filter( 'excerpt_length', 'prefix_custom_excerpt_length', 999 );



	// Add Custom Post Type
	
	function add_custom_post_type() {

		$labels = array(
			'name' => __('Lessons'),
			'singular_name' => __('Lesson'),
			'add_new' => __('New Lesson'),
			'add_new_item' => __('Add New Lesson'),
			'edit_item' => __('Edit Lesson'),
			'new_item'  => __('New Lesson'),
			'view_item' => __('View Lesson'),
			'search_items' => __('Search Lessons'),
			'not_found' => __('Lesson Not Found'),
			'not_found_in_trash' => __('Lesson not in trash')
		);

		$args = array(
			'labels' => $labels,
			'has_archive' => true,
			'public' => true,
			'hierarchical' => false,
			'rewrite' => array('slug' => 'lessons'),
			'supports' => array(
				'title', 
				'editor', 
				'excerpt', 
				'custom-fields', 
				'thumbnail',
				'page-attributes'
			),
			'taxonomies' => array( 'post_tag', 'category'),
		);
		register_post_type('lesson',$args);
	}
	add_action('init' , 'add_custom_post_type');
?>