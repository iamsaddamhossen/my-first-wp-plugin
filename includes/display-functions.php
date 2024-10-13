<?php 

/**
 * our display funsctions for outputting information
 */

 function mfp_add_content($content) {
    if(is_single()) {
        $extra_content = '<p class="twitter-message">Follow Me On <a href="https://www.x.com">Twitter</a></p>';
        $content .= $extra_content;
    }
    return $content;
 }

 add_filter('the_content', 'mfp_add_content' );