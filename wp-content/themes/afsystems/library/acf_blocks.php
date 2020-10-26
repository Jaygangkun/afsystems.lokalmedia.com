<?php
	
	
	
	
/**************** Preview CSS ****************/
	



function primer_setup() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
  
	// Enqueue editor styles.
	add_editor_style( 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
	add_editor_style( 'library/css/style.css' );
	
}

add_action( 'after_setup_theme', 'primer_setup' );




/**************** Preview JS ****************/


// Still working out the kinks on this one.

/*
function primer_enqueue() {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/library/js/libs/slick.min.js' );
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/library/js/scripts.js' );
}

add_action( 'enqueue_block_editor_assets', 'primer_enqueue' );
*/




/**************** Gutenberg Block Custom Category ****************/




function custom_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom',
				'title' => __( 'Custom', 'custom' ),
			),
		)
	);
}

add_filter( 'block_categories', 'custom_category', 10, 2);




/**************** Loading ACF into Gutenberg ****************/




// Render Callback

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/{$slug}.php") );
	}
}


// Registering ACF Blocks

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
  	
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'hero' )
		));
		
		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'banner' )
		));
		
		acf_register_block(array(
			'name'				=> 'services',
			'title'				=> __('Services'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'services' )
		));
		
		acf_register_block(array(
			'name'				=> 'services-excerpt',
			'title'				=> __('Services Excerpt'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'services', 'excerpt' )
		));
		
		acf_register_block(array(
			'name'				=> 'products-excerpt',
			'title'				=> __('Products Excerpt'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'products', 'excerpt' )
		));
		
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('CTA'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'cta' )
		));
		
		acf_register_block(array(
			'name'				=> 'about-header',
			'title'				=> __('About Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'about', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'company',
			'title'				=> __('Company'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'company' )
		));
		
		acf_register_block(array(
			'name'				=> 'mission-statement',
			'title'				=> __('Mission Statement'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'mission', 'statement' )
		));
		
		acf_register_block(array(
			'name'				=> 'offers',
			'title'				=> __('Offers'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'offers' )
		));
		
		acf_register_block(array(
			'name'				=> 'operations-map',
			'title'				=> __('Operations Map'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'operations', 'map' )
		));
	
		acf_register_block(array(
			'name'				=> 'values',
			'title'				=> __('Values'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'values' )
		));
		
		acf_register_block(array(
			'name'				=> 'team',
			'title'				=> __('Team'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'team' )
		));
		
		acf_register_block(array(
			'name'				=> 'light-header',
			'title'				=> __('Light Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'light', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'light-header',
			'title'				=> __('Light Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'light', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'service-page-header',
			'title'				=> __('Service Page Header'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'service', 'page', 'header' )
		));
		
		acf_register_block(array(
			'name'				=> 'service-page-intro',
			'title'				=> __('Service Page Intro'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'service', 'page', 'intro' )
		));
		
		acf_register_block(array(
			'name'				=> 'service-page-info',
			'title'				=> __('Service Page Info'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'service', 'page', 'info' )
		));
		
		acf_register_block(array(
			'name'				=> 'video-block',
			'title'				=> __('Video Block'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'video', 'block' )
		));
		
		acf_register_block(array(
			'name'				=> 'service-footer',
			'title'				=> __('Service Footer'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'service', 'footer' )
		));
		
		acf_register_block(array(
			'name'				=> 'products',
			'title'				=> __('Products'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'products' )
		));
		
		acf_register_block(array(
			'name'				=> 'news',
			'title'				=> __('News'),
			'description'		=> __(''),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'custom',
			'icon'				=> 'slides',
			'keywords'			=> array( 'news' )
		));
	}
}
  
?>