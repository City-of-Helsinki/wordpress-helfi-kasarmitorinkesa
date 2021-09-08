<?php

add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
	// check function exists
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(array(
			'name'            => 'frontpage-hero',
			'title'           => 'Etusivun hero',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'openingtimes-address-text',
			'title'           => 'Aukioloajat, osoite ja lisäteksti',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'image-and-text',
			'title'           => 'Kuva ja teksti',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'frontpage-news',
			'title'           => 'Etusivu ajankohtaista',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'icon-bar',
			'title'           => 'Ikonipalkki',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'text-columns',
			'title'           => 'Tekstikolumnit',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'logo-bar',
			'title'           => 'Logopalkki',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'image-grid',
			'title'           => 'Kuva grid',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));

		acf_register_block_type(array(
			'name'            => 'large-image',
			'title'           => 'Iso kuva',
			'render_callback' => 'my_acf_block_render_callback',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
		));
	}
}

function my_acf_block_render_callback($block)
{
	$slug = str_replace('acf/', '', $block['name']);
	if (file_exists(get_theme_file_path("/blocks/block-{$slug}.php"))) {
		include(get_theme_file_path("/blocks/block-{$slug}.php"));
	}
}

// Enqueue recommendation block styles
function gb_frontend_styles()
{
	wp_enqueue_style('gb_frontend_styles', get_stylesheet_directory_uri() . '/assets/admin.css', array(), '1.0.1');
}

add_action('admin_enqueue_scripts', 'gb_frontend_styles');

// Don't need this
function smartwp_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css');
