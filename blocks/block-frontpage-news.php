<?php

/**
 * Block Name: Etusivu ajankohtaista
 **/

$otsikko = get_field('otsikko');
$cta_linkki = get_field('cta_linkki');
$cta_teksti = get_field('cta_teksti');
?>

<div class="frontpage-news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2"><?= $otsikko ?></p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) :
                    $post_query->the_post();
            ?>
                <div class="col-12 col-md-4 post mb-3">
                    <p class="h3">
                        <a href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a>
                    </p>
                    <p><?= get_the_excerpt(); ?></p>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="<?= $cta_linkki ?>" class="btn btn-outline-dark"><?= $cta_teksti ?></a>
            </div>
        </div>
    </div>
</div>