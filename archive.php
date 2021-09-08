<?php
/**
 * The template for displaying archive pages
 *
 * @package Aste Helsinki
 */

get_header();
?>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><?= single_term_title(); ?></h1>
            </div>
        </div>
        <div class="row">
            <?php
            while ( have_posts() ) :
                the_post();
            ?>
                <div class="col-12 col-md-4 post d-flex align-items-start flex-column bd-highlight mb-3">
                    <a href="<?= get_the_permalink() ?>">    
                        <p class="mb-auto bd-highlight h3">
                            <?= get_the_title(); ?>
                        </p>
                    </a>
                    <p class="bd-highlight"><?= get_the_date('d.m.Y') ?><br/><?= get_the_excerpt(); ?></p>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>