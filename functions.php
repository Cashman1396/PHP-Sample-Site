<?php 

add_action( 'wp_enqueue_scripts', 'mat_assets' );
function mat_assets() {
	wp_enqueue_style( 'my-awesome-theme', get_stylesheet_uri() );
}


function get_excerpt( $content, $length = 450) {
    if( strlen ( $content ) <= $length ) {
        return $content;
    }

    $excerpt = substr( $content, 0, $length );
    $excerpt = strip_tags( $excerpt );
    return $excerpt;
}

?>