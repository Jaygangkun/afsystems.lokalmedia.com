<?php /* Block Name: News */ ?>

<section class="news">
	
	<img class="ellipse" src="<?php echo get_template_directory_uri(); ?>/library/images/ellipse.svg" data-aos="fade-up" data-aos-delay="800">
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 data-aos="fade-left"><?php the_title(); ?></h1>
				<div class="categories" data-aos="fade-left" data-aos-delay="400">
				<a class="active" href="/news">All</a>
					<?php wp_list_categories(array(
						'hide_empty' => 0,
						'title_li' => '',
						'style' => '',
						'separator' => '',
						'exclude' => '1' // Exclude the featured category
					)); ?>
				</div><!-- end .categories -->
			</div><!-- end .col-lg-12 -->
		</div><!-- end .row -->
		
		<div class="row">
			
			<?php

			$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			);
			
			$count = 1;
			$my_secondary_loop = new WP_Query($args);
			if( $my_secondary_loop->have_posts() ): while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post(); ?>
			
				<?php if ($count == 1) : ?>
				
				<div class="col-lg-8 col-md-6">
					<div class="news-post" data-aos="fade-up">
						<a class="news-img" href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url('primer-1400'); ?>);"></a>
						<h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p class="news-excerpt"><?= wp_trim_words( get_the_content(), 20 ) ?></p>
						<p class="news-date"><?= get_the_date( 'F jS, Y' ); ?></p>
					</div><!-- end .news-post -->
				</div><!-- end .col-lg-8 -->
				
				<?php else : ?>
				
				<div class="col-lg-4 col-md-6" data-aos="fade-up">
					<div class="news-post">
						<a class="news-img" href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url('primer-1400'); ?>);"></a>
						<h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p class="news-excerpt"><?= wp_trim_words( get_the_content(), 10 ) ?></p>
						<p class="news-date"><?= get_the_date( 'F jS, Y' ); ?></p>
					</div><!-- end .news-post -->
				</div><!-- end .col-lg-4 -->
				
				
				<?php endif; ?>
			
			<?php $count++; endwhile; endif; wp_reset_postdata(); ?>
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</section>