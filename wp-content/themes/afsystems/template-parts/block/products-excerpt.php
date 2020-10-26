<?php /* Block Name: Products Excerpt */ ?>

<section class="products-excerpt">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="fancy" data-aos="fade-left"><?php the_field('title'); ?></h2>
				<p data-aos="fade-left"><?php the_field('info'); ?></p>
				<?php $link = get_field('link'); if( $link ): ?>
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" data-aos="fade-left"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-6">
				<img class="bottom-img img-fluid" src="<?php the_field('image'); ?>" data-aos="slide-up" data-aos-offset="500" data-aos-duration="1000">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
		
		
	</div><!-- end .container -->
</section>