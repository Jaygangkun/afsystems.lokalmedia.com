<?php /* Block Name: Company */ ?>

<section class="company">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h2 class="fancy" data-aos="fade-left" data-aos-delay="400"><?php the_field('title'); ?></h2>
				<p class="fancy" data-aos="fade-left" data-aos-delay="400"><?php the_field('info'); ?></p>
			</div><!-- end .col-lg-6 -->
			<div class="col-lg-6">
				<img data-aos="fade-in" src="<?php the_field('image'); ?>" class="img-fluid">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
		
		<div class="row">
			<div class="col-lg-9">
				<h3><?php the_field('service_title'); ?></h3>
			</div><!-- end .col-lg-9 -->
		</div><!-- end .row -->
		
		<div class="row justify-content-center">
			
			<?php if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>
			
			<div data-aos="fade-up" class="col-lg-2 text-center">
				<img src="<?php the_sub_field('service_icon'); ?>" class="img-fluid service-icon">
				<span><?php the_sub_field('service'); ?></span>
			</div><!-- end .col-lg-2 -->
			
			<?php endwhile; endif; ?>
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>