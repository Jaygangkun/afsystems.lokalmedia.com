<?php /* Block Name: Video Block */ ?>

<?php $videoImage = get_field('background_image'); if( !empty($videoImage) ): 
	$videoThumb = $videoImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="video-block" style="background-image: linear-gradient(90deg, rgba(0, 98, 155, 0.3), rgba(0, 98, 155, 0.3)), url(<?= $videoThumb; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mx-auto text-center">
					<a class="btn btn-primary" data-fancybox href="<?php the_field('video_link'); ?>" data-aos="fade-up"><?php the_field('button_title'); ?></a>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>