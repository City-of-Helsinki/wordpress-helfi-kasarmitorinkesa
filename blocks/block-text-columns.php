<?php
/**
 * Block Name: Tekstikolumnit
 **/

$otsikko = get_field( 'otsikko' );
$columns = get_field( 'kolumnit' );
?>

<div class="frontpage-news text-columns">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= $otsikko ?></h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($columns as $key => $column):
            ?>
                <div class="col-12 col-md-4 post">
                    <?= $column['teksti'] ?>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>