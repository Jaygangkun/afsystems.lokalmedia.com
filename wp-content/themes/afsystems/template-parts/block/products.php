<?php /* Block Name: Products */ ?>

<section class="products-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<h1 data-aos="fade-left" data-aos-delay="400"><?php the_field('title'); ?></h1>
				<p data-aos="fade-left" data-aos-delay="400"><?php the_field('info'); ?></p>
			</div><!-- end .col-lg-7 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
	
	<img class="ellipse" src="<?php echo get_template_directory_uri(); ?>/library/images/ellipse.svg" data-aos="fade-up" data-aos-delay="800">
</section>

<section class="products-bottom">
	<div class="container">
		<div class="row">
			
			<?php if( have_rows('products') ): while ( have_rows('products') ) : the_row(); ?>
			
			<div class="col-lg-6">
				<div class="product" data-aos="fade-up" data-aos-delay="800">
					<div class="product-image" style="background-image: url(<?php the_sub_field('product_image'); ?>);"></div>
					<div class="product-title"><?php the_sub_field('product_title'); ?></div>
				</div><!-- end .product -->
			</div><!-- end .col-lg-6 -->
			
			<?php endwhile; endif; ?>
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>