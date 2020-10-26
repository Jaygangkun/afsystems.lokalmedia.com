<?php /* Block Name: Offers */ ?>

<section class="offers">
	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<h3 class="mb-5"><?php the_field('title'); ?></h3>
			</div><!-- end .col-lg-2 -->
			<div class="col-lg-10">
				<div class="row">
					
					<?php if( have_rows('offers') ): while ( have_rows('offers') ) : the_row(); ?>
					
					<div class="col-lg-6 d-flex mb-4 align-items-start" data-aos="fade-left">
						<img src="<?php the_sub_field('icon'); ?>" class="img-fluid">
						<p class="my-0"><?php the_sub_field('offer'); ?></p>
					</div><!-- end .col-lg-6 -->
					
					<?php endwhile; endif; ?>
					
				</div><!-- end .row -->
			</div><!-- end .col-lg-10 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>