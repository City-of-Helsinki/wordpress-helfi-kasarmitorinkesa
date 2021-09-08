<?php
/**
 * Block Name: Ikonipalkki
 **/

$otsikko = get_field( 'otsikko' );
$ikonit = get_field( 'ikonit' );
?>

<div class="icon-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= $otsikko ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($ikonit as $key => $ikoni):
            ?>
            <div class="col icon-col">
                <img src="<?= $ikoni['ikoni']['url'] ?>" alt="<?= $ikoni['otsikko'] ?>">
                <h5><?= $ikoni['otsikko'] ?></h5>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>