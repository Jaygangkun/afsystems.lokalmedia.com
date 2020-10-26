<?php /* Block Name: Values */ ?>

<?php $backgroundImage = get_field('image'); if( !empty($backgroundImage) ): 
	$backgroundThumb = $backgroundImage['sizes'][ 'primer-1400' ]; endif;
?>

<section class="values">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 px-0 order-2 order-lg-1">
				<div class="image" style="background-image: url(<?= $backgroundThumb; ?>)"></div>
			</div><!-- end .col-lg-3 -->
			
			<div class="col-lg-9 px-lg-0 order-1 order-lg-2">
				<div class="content">
					<h4 data-aos="fade-in"><?php the_field('title'); ?></h4>
					
					<?php if( have_rows('values') ): while ( have_rows('values') ) : the_row(); ?>
						<div class="value" data-aos="fade-left">
							<div><img src="<?php the_field('bullet_image'); ?>"></div>
							<p class="my-0"><?php the_sub_field('value'); ?></p>
						</div><!-- end .value -->
					<?php endwhile; endif; ?>
				</div><!-- end .content -->
			</div><!-- end .col-lg-9 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>