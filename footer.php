<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3><?= pll__('Yhteystiedot') ?></h3>
            </div>
        </div>
        <div class="row contacts">
            <?php
            $contacts = get_field('yhteystiedot', pll_current_language('slug'));
            foreach ($contacts as $key => $contact) :
            ?>
                <div class="col-12 col-md-6 col-lg-3 contact">
                    <h4><?= $contact['otsikko'] ?></h4>
                    <?= apply_filters('the_content', $contact['sisalto']); ?>
                </div>
            <?php
            endforeach;
            ?>
        </div>
        <hr /> 
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <a href="<?= pll_home_url(pll_current_language()); ?>"><img src="<?= get_field('logo_white', pll_current_language('slug'))['url']; ?>" alt="<?= the_field('name', pll_current_language('slug')) ?>" class="footer_logo"></a>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <p>
                    <?= get_field('osoiterivi_1', pll_current_language('slug')); ?>
                    <br />
                    <?= get_field('osoiterivi_2', pll_current_language('slug')); ?>
                    <br />
                    <?= get_field('osoiterivi_3', pll_current_language('slug')); ?>
                </p>
                <br />
                <p><a style="text-decoration: none;" href="https://www.hel.fi">www.hel.fi</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <?= get_field('copyright', pll_current_language('slug')) ?>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <a target="_blank" href="<?= get_field('tietosuojaseloste', pll_current_language('slug')) ?>"><?= pll__('Tietosuojaseloste') ?></a>
            </div>
        </div>
    </div>
</footer>

<script src="<?= get_template_directory_uri(); ?>/assets/js/theme.js"></script>

<?php wp_footer(); ?>
</body>

</html>