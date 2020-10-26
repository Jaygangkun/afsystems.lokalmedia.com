<?php /* Block Name: Operations Map */ ?>

<?php $backgroundImage = get_field('image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="operations-map">
	<div class="operations-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mx-auto text-center" data-aos="fade-up">
					<h2><?php the_field('title'); ?></h2>
					<p><?php the_field('subtitle'); ?></p>
				</div><!-- end .col-lg-6 -->
			</div><!-- end .row -->
		</div><!-- end .container -->
	</div><!-- end .operations-top -->
	
	<img data-aos="fade-in" src="<?= $backgroundThumb; ?>" class="img-fluid">
</section>