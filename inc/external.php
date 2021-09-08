<?php
/***
* link external scripts like GA and Facebook pixels
***/


// add Google Analytics to wp_head
add_action('wp_head', 'astehelsinki_add_googleanalytics');
function astehelsinki_add_googleanalytics() { ?>

  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <!-- ADD GA SCRIPTS HERE -->

<?php }; 

// add something to wp_footer, this is just a model for functions
add_action('wp_footer', 'astehelsinki_add_footer');
function astehelsinki_add_footer() { ?>

<!-- ADD SCRIPTS HERE --> 

<?php };