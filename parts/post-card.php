<div class="col">
<div class="card">
    <?php 
    if(has_post_thumbnail()) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
	if(!empty($large_image_url[0])) { ?>
        <img src="<?php echo $large_image_url[0];?>" class="card-img-top" alt="<?php the_title();?>">
    <?php }
    } ?>    
    <div class="card-body">
        <h5 class="card-title hdfont"><?php the_title();?></h5>
        <p class="card-text"><?php the_excerpt();?></p>
        <a href="<?php the_permalink();?>" class="btn btn-primary">View More</a>
    </div>
</div>
</div>