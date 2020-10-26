<?php /* Block Name: Service Page Info */ ?>

<section class="service-info-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" data-aos="fade-left">
				<h2 class="fancy"><?php the_field('title'); ?></h2>
				<?php the_field('info'); ?>
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-6">
				<img src="<?php the_field('image'); ?>" class="img-fluid">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>