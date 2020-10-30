<footer class="footer" role="contentinfo">

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php if ( get_field('footer_logo', 'option') ) : ?>
				<a class="footer-brand" href="<?php echo home_url(); ?>"><img src="<?php the_field('footer_logo', 'option') ?>" class="img-fluid"></a>
			<?php else : ?>
				<a class="footer-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
			<p><?php the_field('copyright_message', 'option') ?></p>
		</div><!-- end .col-lg-3 -->
		<div class="col-lg-7 offset-lg-2">
			<div class="row">
				<div class="col-lg-4">
					<span class="footer-title">Navigation</span>
					<?php wp_nav_menu( array( 'menu' => 'Footer Menu' ) ); ?>
				</div><!-- end .col-lg-4 -->
				<div class="col-lg-4">
					<span class="footer-title">Services</span>
					<?php wp_nav_menu( array( 'menu' => 'Services Menu' ) ); ?>
				</div><!-- end .col-lg-4 -->
				<div class="col-lg-4">
					<span class="footer-title">Contact Us</span>
					<?php the_field('company_contact_info', 'option') ?>
				</div><!-- end .col-lg-4 -->
			</div><!-- end .row -->
		</div><!-- end .col-lg-7 -->
	</div><!-- end .row -->
</div><!-- end .container -->
	
</footer> <!-- end footer -->

</div> <!-- end #container -->

<!-- all js scripts are loaded in library/primer.php -->
<?php wp_footer(); ?>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html> <!-- end page. what a ride! -->
