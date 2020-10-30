<?php /* Block Name: Contact Form */ ?>

<section class="contact-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" data-aos="fade-left" data-aos-delay="400">
				<h1><?php the_field('title'); ?></h1>
				<p class="mb-5"><?php the_field('info'); ?></p>
				<?php the_field('company_contact_info', 'option') ?>
			</div><!-- end .col-lg-7 -->
			
			<div class="col-lg-5 offset-lg-1" data-aos="fade-up" data-aos-delay="800">
				<div class="contact-form" >
					<?php the_field('form'); ?>
				</div><!-- end .contact-form -->
			</div><!-- end .col-lg-5 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>
