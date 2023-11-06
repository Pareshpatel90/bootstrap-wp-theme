<?php
function custom_breadcrumb() {
	global $post;
	if ( ! is_home() ) {
		echo '<a href="' . site_url() . '">Home</a> / ';
		if ( is_category() || is_single() ) {
			the_category( ' / ' );
			if ( is_single() ) {
				echo ' / ';
				the_title();
			}
		}elseif ( is_search() ) {
            the_search_query();
        }
        elseif ( is_page() ) {
			if ( $post->post_parent ) {
				$anc   = get_post_ancestors( $post->ID );
				$title = get_the_title();
				foreach ( $anc as $ancestor ) {
					$output = '<a href="' . get_permalink( $ancestor ) . '" title="' . get_the_title( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a> / ';
				}
				echo $output;
				echo $title;
			} else {
				echo '<strong> ' . get_the_title() . '</strong>';
			}
		}
	}
}