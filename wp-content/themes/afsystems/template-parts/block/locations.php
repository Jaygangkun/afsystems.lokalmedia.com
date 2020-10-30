<?php /* Block Name: Locations */ ?>

<section class="locations">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center">
				<h2><?php the_field('title'); ?></h2>
				<p class="mb-5"><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
		
		<div class="row">
			
			<?php if( have_rows('locations') ): while ( have_rows('locations') ) : the_row(); ?>
			
			<div class="col-lg-4 col-md-6 location" data-aos="fade-up">
				<iframe
				  width="100%"
				  height="200"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC76Jy27_E4g1ImEjkKpsUAzAKaV3hnxiY
				    &q=<?php the_sub_field('address'); ?>" allowfullscreen>
				</iframe>
				<h4 class="mb-4 mt-2"><?php the_sub_field('city'); ?></h4>
				<p><?php the_sub_field('address'); ?></p>
				
			</div><!-- end .col-lg-4 -->
			
			<?php endwhile; endif; ?>
			
		</div><!-- end .row -->
		
		<img src="<?php the_field('image'); ?>" class="bottom-img" data-aos="fade-left" data-aos-duration="1000">
	</div><!-- end .container -->
	
	
</section>