<?php

// modify read_more_link
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"> ادامه مطلب »</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


// adding more to the end of excerpt
function modify_excerpt_more($more) {
    return '<a class="more" href="'.get_the_permalink().'"> ادامه مطلب</a>';
}
add_filter( 'excerpt_more', 'modify_excerpt_more' );



// adding class 'excerpt' to excerpt paragraph
function add_excerpt_class($excerpt){
    $excerpt = str_replace( "<p", '<p class="excerpt"', $excerpt );
    return $excerpt;
}
add_filter( "the_excerpt", "add_excerpt_class" );



