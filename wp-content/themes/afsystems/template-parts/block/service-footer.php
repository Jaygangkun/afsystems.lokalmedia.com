<?php /* Block Name: Service Footer */ ?>

<section class="service-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 order-2 order-lg-1">
				<img class="img-fluid" src="<?php the_field('image'); ?>">
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-4 offset-lg-1 order-1 order-lg-2">
				<h2 class="fancy"><?php the_field('title'); ?></h2>
				<p><?php the_field('info'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>