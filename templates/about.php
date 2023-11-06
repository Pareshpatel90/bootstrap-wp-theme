<?php 
/* 
*Template Name: About Page 
*/ 
get_header();
while(have_posts()):the_post();
    get_template_part('template-parts/content', 'page');
endwhile;
get_footer();
?>