<?php
/**
 * Block Name: Kuva oikealla ja teksti
 **/

$kuva = get_field( 'kuva' )['url'];
$color = get_field( 'color' );
$text_color = get_field( 'text_color' );
$teksti = get_field( 'teksti' );
$cta_linkki = get_field( 'cta_linkki' );
$cta_teksti = get_field( 'cta_teksti' );
?>

<div class="image-and-text image-right-and-text">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
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
            <div class="col-12 col-md-8 image_column">
                <img src="<?= $kuva ?>" alt="<?= $cta_teksti ?>" />
            </div>
        </div>
    </div>
</div>