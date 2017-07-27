<?php

 if ( true == get_theme_mod( 'on_of_l', true ) ) :

    $log_settings = get_theme_mod( 'logos_setting'); ?>

<!-- CLIENTS LOGOS -->
<div id="lg">
  <div class="container">
    <div class="row  text-center logos-bar">
<?php

 if($log_settings) :

			foreach( $log_settings as $setting ) :

        $log_img = $setting['logos_img'];
        $img_log = esc_url(wp_get_attachment_url( $setting['logos_img'] ));
        $l_txt = $setting['link_text']; ?>

			<div class="col-lg-2">
				<a href="<?php echo $setting['link_url'] ? $setting['link_url'] : '#'; ?>">
					<img class='img-responsive' src="<?php echo $img_log ? $img_log : $log_img; ?>" alt="<?= $l_txt; ?>">
				</a>
      </div>

<?php endforeach; ?>

<?php endif; ?>

    </div><!-- row -->
  </div><!-- container -->
</div><!-- dg -->

<?php endif; ?>

<?php if ( true == get_theme_mod( 'on_of_2', true ) ) :
    $call_1 = get_theme_mod( 'call_1', esc_attr__( 'THIS IS A CALL TO ACTION AREA', 'xtra-link' ));
    $call_2 = get_theme_mod( 'call_2', __( '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', 'xtra-link' ));
    $call_3 = get_theme_mod( 'call_3', __('Button Action', 'xtra-link'));
    $call_4 = get_theme_mod( 'call_4', 'https://xtra-strona.pl/');
?>
	<!-- CALL TO ACTION -->
	<div id="call">
		<div class="container">
			<div class="row">

				<h3><?= esc_html($call_1);?></h3>

				<div class="col-lg-8 col-lg-offset-2">

					<?= $call_2;?>

					<p>
            <a href='<?= esc_url($call_4);?>' type="button" class="btn btn-green btn-lg" target='_new'>
              <?= esc_html($call_3);?>
            </a>
          </p>

				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Call to action -->
<?php endif; ?>

<?php if ( true == get_theme_mod( 'on_of_3', true ) ) :
  $stay_1 = get_theme_mod( 'stay_1', esc_attr__( 'Stay Connected', 'xtra-link' ));
  $stay_2 = get_theme_mod( 'stay_2', __( '<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>', 'xtra-link' ));
?>
	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1><?= esc_html($stay_1); ?></h1>
               <?= $stay_2; ?>
				<br>
			</div><!-- col-lg-12 -->
		</div><!-- row -->
	</div><!-- container -->
<?php endif; ?>

<?php if ( true == get_theme_mod( 'on_of_4', true ) ) : ?>

  <?php
  // Default values for 'my_setting' theme mod.
  $defaults_footer = array(
    array(
      'icon' => 'fa-facebook',
      'link_text' => esc_attr__( 'FACEBOOK', 'xtra-link' ),
      'link_url'  => 'https://www.facebook.com/',
      'description' => esc_html__( 'Become A Friend', 'xtra-link' )
    ),
    array(
      'icon' => 'fa-twitter',
      'link_text' => esc_attr__( 'TWITTER', 'xtra-link' ),
      'link_url'  => 'https://twitter.com',
      'description' => esc_html__( 'Follow Us', 'xtra-link' )
    ),

    array(
      'icon' => 'fa-google-plus',
      'link_text' => esc_attr__( 'GOOGLE +', 'xtra-link' ),
      'link_url'  => 'https://plus.google.com',
      'description' => esc_html__( 'Add Us To Your Circle', 'xtra-link' )
    ),
  );

  // Theme_mod settings to check.
  $foot_social = get_theme_mod( 'footer_social', $defaults_footer ); ?>

<!-- SOCIAL FOOTER -->
<section id="contact"></section>
<div id="sf">
	<div class="container">
		<div class="row">

  <?php foreach( $foot_social as $setting ) : ?>
			<div class="col-lg-4 dg">
				<h4 class="ml"><?= $setting['link_text']; ?></h4>
				<p class="centered">
          <a href="<?= $setting['link_url']; ?>" target="_new">
            <i class="fa <?= $setting['icon']; ?>"></i>
          </a>
        </p>
				<p class="ml">> <?= $setting['description']; ?></p>
			</div>
  <?php endforeach; ?>

		</div><!-- row -->
	</div><!-- container -->
</div><!-- Social Footer -->
<?php endif; ?>

<!-- CONTACT FOOTER -->
<div id="cf">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
						<div id="mapwrap">
					<iframe height="400" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.es/maps?t=m&amp;ie=UTF8&amp;ll=52.752693,22.791016&amp;spn=67.34552,156.972656&amp;z=6&amp;output=embed"></iframe>
				</div>
			</div><!--col-lg-8-->
			<div class="col-lg-4">
				<h4>ADDRESS<br/>Minsk - Head Office</h4>
				<br>
				<p>
					Business Center, SomeAve 987,<br/>
					Minsk, Belarus.
				</p>
				<p>
					P: +55 4839-4390<br/>
					F: +55 4333-4345<br/>
					E: <a href="mailto:#">hello@linkagency.com</a>
				</p>
				<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div><!--col-lg-4-->
		</div><!-- row -->
	</div><!-- container -->
</div><!-- Contact Footer -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
<script src="<?php bloginfo('template_url') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/imagesloaded.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/classie.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/AnimOnScroll.js"></script>

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

<?php wp_footer(); ?>

</body>
</html>
