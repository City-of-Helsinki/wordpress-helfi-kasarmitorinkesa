<?php

/**
 * The template for displaying all single pages
 *
 * @package Aste Helsinki
 */

get_header();

while (have_posts()) : the_post();
?>
<div class="simple-page">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>
<?php
endwhile;

get_footer();
