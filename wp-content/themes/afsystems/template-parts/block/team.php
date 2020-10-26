<?php /* Block Name: Team */ ?>

<section class="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-5">
				<h2 class="fancy" data-aos="fade-left"><?php the_field('title'); ?></h2>
			</div><!-- end .col-lg-6 -->
			<div class="col-lg-6">
				<p class="my-0" data-aos="fade-in"><?php the_field('info'); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
		
		<div class="row mt-5">
			<?php if( have_rows('team_members') ): while ( have_rows('team_members') ) : the_row(); ?>
			
			<div class="col-lg-3 col-md-6">
				<div class="member" data-aos="fade-up">
					<div class="member-image" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
					<p class="member-name"><?php the_sub_field('name'); ?></p>
					<p class="member-title"><?php the_sub_field('job_title'); ?></p>
				</div><!-- end .member -->
			</div><!-- end .col-lg-3 -->
			
			<?php endwhile; endif ?>
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>