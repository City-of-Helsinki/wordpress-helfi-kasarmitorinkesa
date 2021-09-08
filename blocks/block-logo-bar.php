<?php
/**
 * Block Name: Logopalkki
 **/

$otsikko = get_field( 'otsikko' );
$logos = get_field( 'logot' );
?>

<div class="logo-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h2"><?= $otsikko ?></p>
            </div>
        </div>
        <div class="row logos">
            <?php
            foreach ($logos as $key => $logo):
            ?>
                <div class="col-6 col-sm-4 col-md-2">
                    <img src="<?= $logo['logo']['url'] ?>" alt="<?= $logo['otsikko'] ?>" class="w-100"/>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>