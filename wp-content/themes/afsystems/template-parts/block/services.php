<?php /* Block Name: Services */ ?>

<?php $count = 1; if( have_rows('services') ): while ( have_rows('services') ) : the_row(); ?>

<?php if ( $count % 2 == 0 ) : ?>

<section class="service-preview">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 order-lg-2">
				<h2 class="fancy" data-aos="fade-left"><?php the_sub_field('title'); ?></h2>
				<p data-aos="fade-left" data-aos-delay="400"><?php the_sub_field('info'); ?></p>
				<?php $link = get_sub_field('button'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-6 order-lg-1">
				<img class="img-fluid" src="<?php the_sub_field('image'); ?>" data-aos="fade-in" data-aos-delay="400">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>

<?php else: ?>

<section class="service-preview blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="fancy" data-aos="fade-left"><?php the_sub_field('title'); ?></h2>
				<p data-aos="fade-left" data-aos-delay="400"><?php the_sub_field('info'); ?></p>
				<?php $link = get_sub_field('button'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
			</div><!-- end .col-lg-6 -->
			
			<div class="col-lg-6">
				<img class="img-fluid" src="<?php the_sub_field('image'); ?>" data-aos="fade-in" data-aos-delay="400">
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>

<?php endif; ?>

<?php $count++; endwhile; endif; ?>