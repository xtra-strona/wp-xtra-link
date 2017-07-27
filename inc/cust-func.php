<?php

// WP QUERY PAGINATION
function pag_link($query,$paged) {

  $big = 999999999; // need an unlikely integer

   $args = array(
  	// 'base'               => '%_%',
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  	'format'             => '?paged=%#%',
  	'total' => $query->max_num_pages,
  	'current' => max( 1, $paged ),
  	'show_all'           => false,
  	'end_size'           => 1,
  	'mid_size'           => 2,
  	'prev_next'          => true,
  	'prev_text'          => __('« Prev'),
  	'next_text'          => __('Next »'),
  	'type'               => 'plain',
  	'add_args'           => false,
  	'add_fragment'       => '',
    'before_page_number' => '<li>',
    'after_page_number' => '</li>'
  );

      echo paginate_links($args);
}

// Cust excerpt_length
function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<p><a href="%1$s"><i class="fa fa-link"></i>%2$s</a></p>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
