<?php /* Block Name: Banner */ ?>

<section class="banner">
	<div class="banner-inner" data-aos="fade-in">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-5 offset-md-5 offset-7">
					<h2 data-aos="fade-in" data-aos-delay="400"><?php the_field('title'); ?></h2>
				</div><!-- end ,col-lg-7 -->
			</div><!-- end .row -->
		</div><!-- end .container -->
		
		<img src="<?php the_field('image'); ?>" data-aos="fade-right" data-aos-delay="1100">
	</div><!-- end .banner-inner -->
</section>