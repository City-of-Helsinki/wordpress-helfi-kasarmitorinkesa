<?php

// Custom dashboard tab for acf
if (function_exists('acf_add_options_page')) {
	$parent = acf_add_options_page(array(
		'page_title' => 'Sivuston asetukset',
		'menu_title' => 'Sivuston asetukset',
		'menu_slug'  => 'sivuston-asetukset',
		'icon_url'   => 'dashicons-welcome-widgets-menus',
		'position'   => 2,
	));

	foreach (pll_the_languages(array(
		'raw' => 1
	)) as $lang) {

		$slug = $lang['slug'];

		acf_add_options_page(array(
			'page_title' => "Asetukset ${slug}",
			'menu_title' => "Asetukset ${slug}",
			'menu_slug'  => "asetukset-${slug}",
			'capability' => 'edit_posts',
			'post_id'    => $slug,
			'parent'     => $parent['menu_slug']
		));
	}
}

// Add support for media filetype upload
function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

// Change excerpt
function tn_custom_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
