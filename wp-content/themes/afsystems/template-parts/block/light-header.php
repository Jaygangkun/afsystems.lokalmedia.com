<?php /* Block Name: Light Header */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="light-header" style="background-image: linear-gradient(90deg, #F7F9FA 35.36%, rgba(248, 250, 251, 0) 97.57%), url(<?= $backgroundThumb; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1 data-aos="fade-left" data-aos-delay="400"><?php the_field('title'); ?></h1>
				<p data-aos="fade-left" data-aos-delay="800"><?php the_field('subtitle'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>