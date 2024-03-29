<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- Mobile Meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- Google Analytics-->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
  	
  	<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          
        	<?php if ( get_field('nav_logo', 'option') ) : ?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('nav_logo', 'option') ?>" class="img-fluid"></a>
			<?php else : ?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
			
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
        		<span class="navbar-toggler-icon"></span>
        	</button>
        
        	<div class="collapse navbar-collapse" id="navbar-content">
          	
          	<?php primer_main_nav(); ?>
          	
          	<?php wp_nav_menu( array( 'menu' => 'Nav Right' ) ); ?>
          	
        	</div><!-- end #navbar-content -->
        </div><!-- end .container -->
      </nav>

    