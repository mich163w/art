<?php
add_filter( 'custom_quote_content', 'new_quote_content_callback' );
function new_quote_content_callback( $content ) {
    $content = "There are no bugs in programming. Only unexpected features.";
    return $content;
}

?> 
