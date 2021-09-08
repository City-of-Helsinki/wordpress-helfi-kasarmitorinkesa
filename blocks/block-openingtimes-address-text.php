<?php
/**
 * Block Name: Aukioloajat, osoite ja lisäteksti
 **/

$kolumni_1_teksti = get_field( 'kolumni_1_teksti' );
$kolumni_2_teksti = get_field( 'kolumni_2_teksti' );
$karttalinkki_teksti = get_field( 'karttalinkki_teksti' );
$karttalinkki = get_field( 'karttalinkki' );
?>

<div class="openingtimes-address-text">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 column_1">
                <div class="content">
                    <?= $kolumni_1_teksti ?>
                    <a href="<?= $karttalinkki ?>" target="_blank" class="font-weight-bold text-dark"><?= $karttalinkki_teksti ?></a>
                </div>
            </div>
            <div class="col-12 col-md-8 column_2">
                <?= $kolumni_2_teksti ?>
            </div>
        </div>
    </div>
</div>