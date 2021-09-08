<?php
/**
 * Block Name: Iso kuva
 **/
$otsikko = get_field( 'otsikko' );
$kuva = get_field( 'kuva' );
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <img src="<?= $kuva['url'] ?>" alt="<?= $otsikko ?>" class="w-100"/>
        </div>
    </div>
</div>