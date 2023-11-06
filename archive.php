<?php
get_header();
echo '<div class="container py-5 bd-layout">
<div class="row row-cols-1 row-cols-md-3 g-4">';
while ( have_posts() ) : the_post();        
    get_template_part('parts/post', 'card');    
endwhile; 
echo '</div>';
echo '<div class="container py-3 m-auto">';
the_posts_pagination();   
echo '</div></div>';
get_footer(); 