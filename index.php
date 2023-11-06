<?php
get_header();
while ( have_posts() ) : the_post();
    get_template_part('template-parts/content', 'front');
    wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        ) );
endwhile;
get_footer(); 
