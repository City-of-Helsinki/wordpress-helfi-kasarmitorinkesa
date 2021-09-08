<?php
/**
 * The template for displaying search
 *
 * @package Aste Helsinki
 */

get_header();
?>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><?= pll__('Haku') ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php get_search_form(); ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr/>
            </div>
        </div>
        <div class="row">
            <?php
            $post_query = new WP_Query();
            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    the_post();
            ?>
                <div class="col-12 col-md-4 post d-flex align-items-start flex-column bd-highlight mb-3">
                    <a href="<?= get_the_permalink() ?>">    
                        <p class="mb-auto bd-highlight h3">
                            <?= get_the_title(); ?>
                        </p>
                    </a>
                    <p class="bd-highlight"><?= get_the_excerpt(); ?></p>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>