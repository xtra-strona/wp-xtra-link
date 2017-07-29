<?php get_header();
	$txt_blog_1 = get_theme_mod( 'img_blog_txt');
	$txt_blog_2 = get_theme_mod( 'img_blog_txtarea');
?>

<div class="parallax-oth-pages">
  <div class="container">
       <h1><?= $txt_blog_1; ?></h1>
       <p><?= $txt_blog_2; ?></p>
  </div><!-- /container -->

<br>
<!-- Page Content -->
<div class="container">

    <div class="row">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php else : ?>

          <div class="col-md-12">

<?php endif; ?>

          <!-- First Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                 get_template_part('template-parts/content', get_post_format());

              endwhile; ?>

              <!-- Pager -->
                <?php the_posts_pagination( array(
                     'mid_size'  => 2,
                     'prev_text' => __( '&larr; Previous', 'xtra-link' ),
                     'next_text' => __( 'Next &rarr;', 'xtra-link' ),
                    ) );

                   else : ?>

            	<h3><?php _e( 'Sorry, no posts matched the criteria.','xtra-link' ); ?></h3>

            <?php endif; ?>

        </div>

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
                 <?php get_sidebar(); ?>
        </div>
    <?php } ?>

    </div><!-- /.row -->
 </div><!-- /.container -->

 </div><!-- /.parallax-oth-pages -->
<?php get_footer(); ?>