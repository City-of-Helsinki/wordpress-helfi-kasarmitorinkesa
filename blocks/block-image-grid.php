<?php
/**
 * Block Name: Kuva grid
 **/

$kuvat = get_field( 'kuvat' );
?>

<div class="container-fluid">
    <div class="row">
        <?php
        foreach ($kuvat as $key => $kuva):
        ?>
            <div class="col-12 col-md-4">
                <img src="<?= $kuva['kuva']['url'] ?>" alt="<?= $logo['otsikko'] ?>" class="w-100 h-100"/>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
