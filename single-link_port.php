<?php get_header();

  while ( have_posts() ) : the_post();

  $subtitl  = get_post_meta( get_the_ID(), '_cmb_port_subtittle', true );
  $img_port = wp_get_attachment_image( get_post_meta( get_the_ID(), '_cmb_port_f_img_port_id', 1 ), 'full', array( "class" => "img-responsive" ) );

    $txt_area_1  = get_post_meta( get_the_ID(), '_cmb_port_txt_area_1', true );
    $txt_area_2  = get_post_meta( get_the_ID(), '_cmb_port_txt_area_2', true );

  		$img_port_2 = wp_get_attachment_image_url( get_post_meta( get_the_ID(), '_cmb_port_img_port_n_id', 1 ), 'full' );
  		$txt_url   = get_post_meta( get_the_ID(), '_cmb_port_text_url', true );
  		$heading_txt   = get_post_meta( get_the_ID(), '_cmb_port_heading_txt_1', true );

        $files = get_post_meta( get_the_ID(), 'img_port_3', 1 );
?>

	<!-- MAIN PROJECT SECTION -->
	<div id="sp">
		<div class="container">
			<div class="row">
				<h2><?= $subtitl; ?></h2>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /portrwrap -->

	<!-- WELCOME SECTION -->
    <div class="container">
      <div class="row mt centered">
      	<div class="col-lg-8 col-lg-offset-2">

	        <h1><b><?php the_title(); ?></b></h1>
            <?php the_content(); ?>

      	</div>
      </div><!-- /row -->
    </div><!-- /.container -->

    <!-- MAC IMAGE -->
	<div class="container">
		<div class="row centered">
			<div class="col-lg-10 col-lg-offset-1">
				<?= $img_port; ?>
			</div>
		</div>
	</div>


	<!-- CLIENT INFORMATION -->
	<div id="lg">
		<div class="container">
			<div class="row">

				<div class="col-lg-5 col-lg-offset-1 desc">
			     	<?= $txt_area_1; ?>
				</div>

				<div class="col-lg-4 col-lg-offset-1 desc">
					<?= $txt_area_2; ?>
				</div>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- dg -->

	<!-- SINGLE PROJECT STANDOUT IMAGE -->
  <img class='img-responsive center-block' src="<?= $img_port_2; ?>" alt="">
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-8 col-lg-offset-2">
				<h1><?= $heading_txt; ?></h1>
				<ul class="process effect-2" id="process">
          <?php
          if($files) {
          	foreach ( $files as $file ) {
          		 echo "<li><img class='img-responsive center-block' src='{$file}'></li>";
          	}
          }
          ?>
				</ul>
			</div><!-- col-lg-8 -->
		</div><!-- row -->
    </div><!-- container -->

       <?php endwhile; ?>

<?php get_footer(); ?>
