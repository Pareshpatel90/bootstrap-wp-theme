<?php 
$form = '<form role="search" method="get" id="searchform" class="searchform d-flex" action="' . home_url( '/' ) . '" >
<input type="search" placeholder="Search" aria-label="Search" required class="form-control me-2" value="' . get_search_query() . '" name="s" id="s" />
<input class="btn btn-outline-success"  type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
</div>
</form>';
echo $form;