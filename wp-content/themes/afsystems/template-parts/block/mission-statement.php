<?php /* Block Name: Mission Statement */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="mission-statement" style="background-image: linear-gradient(90deg, rgba(0, 98, 155, 0.75), rgba(0, 98, 155, 0.75)), url(<?= $backgroundThumb; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<h3 data-aos="fade-left"><?php the_field('title'); ?></h3>
			</div><!-- end .col-lg-10 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>