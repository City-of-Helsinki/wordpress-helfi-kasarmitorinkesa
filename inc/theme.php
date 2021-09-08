<?php
// Theme functions and filters

if (!function_exists('astehelsinki_setup_parent_theme')) {
	add_action('after_setup_theme', 'astehelsinki_setup_parent_theme');
	function astehelsinki_setup_parent_theme()
	{
		/**
		 * Add default posts and comments RSS feed links to head
		 */
		add_theme_support('automatic-feed-links');
		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');
		/**
		 * Add excerpt support for pages
		 */
		add_post_type_support('page', 'excerpt');
		/**
		 * Add theme support for HTML5 Semantic Markup
		 */
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]);
		/**
		 * Enable support for Post Thumbnails on posts and pages
		 */
		add_theme_support('post-thumbnails');
	}
}

/**
 * Register menu(s).
 */
add_action('after_setup_theme', 'register_my_menu');
function register_my_menu()
{
	register_nav_menu('primary-menu', __('Primary Menu', 'astehelsinki'));
}

/**
 * Register widget area(s).
 */

function astehelsinki_widgets_init()
{
	register_sidebar(array(
		'name'          => 'Sivupalkki oikealla',
		'id'            => 'sidebar-1',
		'before_widget' => '<div class="sidebar-right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'astehelsinki_widgets_init');

/**
 * Enqueue scripts and styles
 */
function astehelsinki_scripts()
{

	// Get last modified timestamp of JS files
	//$scriptVersion = filemtime(get_stylesheet_directory() . '/assets/js/theme.js');
	//$styleVersion = filemtime(get_stylesheet_directory() . '/style.css');
  
  $scriptVersion = '';
	$styleVersion = '';

	wp_enqueue_style('astehelsinki-style', get_template_directory_uri() . '/style.css', array(), $styleVersion);
	wp_enqueue_script('astehelsinki-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), $scriptVersion, true);
}

add_action('wp_enqueue_scripts', 'astehelsinki_scripts');
