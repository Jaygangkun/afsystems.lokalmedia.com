<?php /* Block Name: CTA */ ?>

<?php $backgroundImage = get_field('background_image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="cta" style="background-image: url(<?= $backgroundThumb; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 text-center mx-auto" data-aos="fade-up">
				<h2><?php the_field('title'); ?></h2>
				<p><?php the_field('subtitle'); ?></p>
				<?php $link = get_field('button'); if( $link ): ?>
					<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
				<?php endif; $link = NULL; ?>
			</div><!-- end .col-lg-4 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>