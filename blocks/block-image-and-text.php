<?php
/**
 * Block Name: Kuva ja teksti
 **/

$kuva = get_field( 'kuva' )['url'];
$color = get_field( 'color' );
$image_side = get_field( 'image_side' ); // left / right
$text_color = get_field( 'text_color' );
$teksti = get_field( 'teksti' );
$cta_linkki = get_field( 'cta_linkki' );
$cta_teksti = get_field( 'cta_teksti' );
?>

<div class="image-and-text image-<?= $image_side ?>-and-text">
    <div class="container">
        <div class="row">
            <?php
            if ($image_side == 'left'):
            ?>
            <div class="col-12 col-lg-8 image_column">
                <img src="<?= $kuva ?>" alt="<?= $cta_teksti ?>" />
            </div>
            <?php
            elseif ($image_side == 'right'):
            ?>
            <div class="col-12 col-lg-8 image_column order-lg-12">
                <img src="<?= $kuva ?>" alt="<?= $cta_teksti ?>" />
            </div>
            <?php
            endif;
            ?>
            <div class="col-12 col-lg-4">
                <div class="content" style="background-color: <?= $color ?>; color: <?= $text_color ?>">
                    <?= $teksti ?>
                    <?php
                    if ($cta_teksti != ''):
                    ?>
                    <a class="btn btn-outline-dark" href="<?= $cta_linkki ?>" style="border-color: <?= $text_color ?>; color: <?= $text_color ?>"><?= $cta_teksti ?></a>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>