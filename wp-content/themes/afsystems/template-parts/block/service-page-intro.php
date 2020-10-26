<?php /* Block Name: Service Page Intro */ ?>

<section class="service-intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto text-center">
				<h4 data-aos="fade-up" data-aos-delay="800"><?php the_field('text'); ?></h4>
			</div><!-- end .col-lg-10 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
	
	<img class="ellipse" src="<?php echo get_template_directory_uri(); ?>/library/images/ellipse.svg" data-aos="fade-up" data-aos-delay="800">
</section>