<?php /* Block Name: Services Excerpt */ ?>

<section class="services-excerpt">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 order-lg-1 order-2">
				<div class="row">
					<?php if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>
					<div class="col-md-6 text-center">
						<div class="service" data-aos="fade-up">
							<img src="<?php the_sub_field('service_icon'); ?>" class="img-fluid service-icon">
							<span class="service-title"><?php the_sub_field('service_title'); ?></span>
							<p class="service-info"><?php the_sub_field('service_info'); ?></p>
							<?php $link = get_sub_field('service_link'); if( $link ): ?>
								<a class="service-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							<?php endif; $link = NULL; ?>
						</div><!-- end .service -->
					</div><!-- end .col-lg-6 -->
					<?php endwhile; endif; ?>
				</div><!-- end .row -->
			</div><!-- end .col-lg-8 -->
			
			<div class="col-lg-4 offset-lg-1 order-lg-2 order-1">
				<h2 class="fancy" data-aos="fade-left"><?php the_field('title'); ?></h2>
				<p data-aos="fade-left" data-aos-delay="400"><?php the_field('info'); ?></p>
				<?php $link = get_field('button'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
			</div><!-- end .col-lg-4 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
	
	<img src="<?php the_field('image'); ?>" class="bottom-img">
</section>