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

<div class="related-news-content">
	<div class="container">
		<h2 class="related-news-block__title">Related News Articles</h2>
		<div class="row">
			<?php
			$related = get_posts( 
				array( 
					'category__in' => wp_get_post_categories(get_the_ID() ), 
					'numberposts' => 3, 
					'post__not_in' => array(get_the_ID() ) 
				) 
			);
			if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				<div class="col-lg-4 col-md-6" data-aos="fade-up">
					<div class="news-post">
						<a class="news-img" href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url('primer-1400'); ?>);"></a>
						<h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p class="news-excerpt"><?= wp_trim_words( get_the_content(), 10 ) ?></p>
						<p class="news-date"><?= get_the_date( 'F jS, Y' ); ?></p>
					</div><!-- end .news-post -->
				</div><!-- end .col-lg-4 -->
			<?php }
			wp_reset_postdata(); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>
