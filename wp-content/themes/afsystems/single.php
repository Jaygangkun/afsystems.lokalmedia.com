<?php get_header(); ?>

<div class="news-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center mx-auto">
				<a class="active" href="/news">< News</a>
				<h1 data-aos="fade-up"><?php the_title(); ?></h1>
				<p class="news-date" data-aos="fade-up"><?= get_the_date( 'F jS, Y' ); ?></p>
			</div><!-- end .col-lg-6 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</div><!-- end .news-header -->

<div class="news-content" data-aos="fade-left" data-aos-delay="400">
  <div class="container">
  	<div class="row">
  		<div class="col-lg-12">
    		
  		  <?php if (have_posts()) : while (have_posts()) : the_post(); 
	  		  the_content(); 
	  		  endwhile; endif; ?>
          
  		</div><!-- end .col-lg-12 -->
  		
  	</div><!-- end .row -->
  </div><!-- end .container -->
</div><!-- end .news-content -->


<?php get_footer(); ?>
