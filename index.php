<?php
/**
 * The template for displaying all posts
 *
 * @package Aste Helsinki
 */

get_header();
?>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><?= single_post_title(); ?></h1>
            </div>
        </div>
        <div class="row first_two">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) :
                    $post_query->the_post();
            ?>
                <div class="col-12 col-md-6 post d-flex align-items-start flex-column bd-highlight mb-3">
                    <a href="<?= get_the_permalink() ?>">
                        <p class="h3">
                            <?= get_the_title(); ?>
                        </p>
                    </a>
                    <p><?= get_the_date('d.m.Y') ?><br/><?= get_the_excerpt(); ?></p>
                    <a href="<?= get_the_permalink() ?>">
                        <img class="w-100" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>"/>
                    </a>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="row">
            <div class="col-12">
                <hr/>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'offset' => 2,
                'post_type' => 'post',
                'posts_per_page' => 99999,
            );

            $post_query = new WP_Query($args);

            if ($post_query->have_posts()) :
                while ($post_query->have_posts()) :
                    $post_query->the_post();
            ?>
                <div class="col-12 col-md-4 post mb-3">
                    <a href="<?= get_the_permalink() ?>">    
                        <p class="h3">
                            <?= get_the_title(); ?>
                        </p>
                    </a>
                    <p><?= get_the_date('d.m.Y') ?><br/><?= get_the_excerpt(); ?></p>
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