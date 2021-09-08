<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Aste Helsinki
 */

get_header();

while (have_posts()) : the_post();
?>

	<div class="single-blog-post">
		<div class="container">
			<div class="row">
				<div class="col-12 title">
					<p class="date"><?= get_the_date('d.m.Y'); ?></p>
					<h1 class="<?= get_field('otsikkotyyli') ?>"><?= get_the_title(); ?><h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

<?php
endwhile;

get_footer();
