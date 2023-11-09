<?php
get_header();
        while ( have_posts() ) : the_post();
        global $post;    
        $post_id = $post->ID;
        get_template_part('template-parts/content', get_post_type($post_id));
        endwhile;
get_footer(); 
?>
