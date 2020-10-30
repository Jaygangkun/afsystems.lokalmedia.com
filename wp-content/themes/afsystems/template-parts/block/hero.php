<?php /* Block Name: Hero */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

	<section class="hero" style="background-image: linear-gradient(90deg, rgba(0, 99, 165, 0.6) 42.47%, rgba(0, 99, 165, 0.21) 97.57%), url(<?= $backgroundThumb; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
				<h1><?php the_field('title'); ?></h1>
				<p><?php the_field('subtitle'); ?></p>
				<a class="btn btn-primary" data-fancybox href="<?php the_field('video_link'); ?>"><i class="fa fa-play-circle-o" aria-hidden="true"></i>
 Watch Video</a>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>