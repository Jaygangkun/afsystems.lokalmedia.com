<?php /* Block Name: Service Page Header */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="service-header" style="background-image: linear-gradient(90deg, rgba(0, 99, 165, 0.5) 2.47%, rgba(0, 99, 165, 0.11) 97.57%), url(<?= $backgroundThumb; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<h1 class="value" data-aos="fade-left" data-aos-delay="400"><?php the_field('title'); ?></h1>
			</div><!-- end .col-lg-5 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>