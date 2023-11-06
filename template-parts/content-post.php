<div class="container py-5 bd-layout">
    <div class="row">
    <div class="col-sm-9">
    <?php 
    if(has_post_thumbnail()) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
	if(!empty($large_image_url[0])) { ?>
        <img src="<?php echo $large_image_url[0];?>" class="card-img-top" alt="<?php the_title();?>">
    <?php }
    } ?>  
    <div class="the-content mt-3"> 
    <?php
        the_content();    
    ?></div>
    </div>
    <div class="col-sm-3">
        <?php get_template_part('sidebar');?>
    </div>
</div>
</div>