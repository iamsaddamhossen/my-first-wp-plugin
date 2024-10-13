<?php 

/**
 * our display funsctions for outputting information
 */

 function mfp_add_content($content) {
  
     global $mfp_options;
  
     if(is_singular() && $mfp_options['enable'] == true) {
         $extra_content = '<p class="twitter-message">Follow me on <a href="' . $mfp_options['twitter_url'] . '">Twitter</a></p>';
         $content .= $extra_content;
     }
     return $content;
 }
 add_filter('the_content', 'mfp_add_content');