
<?php get_template_part('template-parts/footer-parts/part', 'logos'); ?>
<?php get_template_part('template-parts/footer-parts/part', 'action'); ?>
<?php  get_template_part('template-parts/footer-parts/part', 'connect'); ?>
<?php  get_template_part('template-parts/footer-parts/part', 'social'); ?>
<?php  get_template_part('template-parts/footer-parts/part', 'contact'); ?>

		</div><!-- row -->
	</div><!-- container -->
</div><!-- Contact Footer -->

<?php wp_footer(); ?>
<?php 
$img_blog = get_theme_mod( 'img_blog', '' );
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->

<!-- <script src="<?php // bloginfo('template_url') ?>/assets/js/modernizr.custom.js"></script>

<script src="<?php // bloginfo('template_url') ?>/assets/js/jquery.js"></script>

<script src="<?php // bloginfo('template_url') ?>/assets/js/parallax.min.js"></script>
<script src="<?php // bloginfo('template_url') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php // bloginfo('template_url') ?>/assets/js/main.js"></script>
<script src="<?php // bloginfo('template_url') ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php // bloginfo('template_url') ?>/assets/js/imagesloaded.js"></script>
<script src="<?php // bloginfo('template_url') ?>/assets/js/classie.js"></script>
<script src="<?php // bloginfo('template_url') ?>/assets/js/AnimOnScroll.js"></script> -->

<script type="text/javascript">
   $('.parallax-window').parallax({imageSrc: '<?php header_image(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-about').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-services').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-oth-pages').parallax({imageSrc: '<?php echo esc_url( $img_blog ); ?>'});
</script>

<script>
new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
} );
</script>

	<script>
		new AnimOnScroll( document.getElementById( 'process' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
</script>

</body>
</html>
