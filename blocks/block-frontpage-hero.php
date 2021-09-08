<?php
/**
 * Block Name: Frontpage hero
 **/

$image = get_field( 'image' );
$title = get_field( 'title' );
$date = get_field( 'date' );
?>

<div class="frontpage-hero" style="background: url(<?= $image['url'] ?>);">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 h-100 position-relative">
                <h1><?= $title ?></h1>
                <p class="h2 date"><?= $date ?></p>
            </div>
        </div>
    </div>
</div>