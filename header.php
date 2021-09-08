<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aste Helsinki
 */
  $sitelink = get_site_url();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- Fonts -->
	<link rel="stylesheet" href="https://makasiini.hel.ninja/delivery/HelsinkiGrotesk/HelsinkiGrotesk.css">

	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $sitelink; ?>/wp-includes/css/dist/block-library/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sitelink; ?>/wp-includes/css/dist/block-library/theme.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/assets/minified/css/main.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/images/helfi-favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ?>/assets/images/helfi-favicon.ico">

	<?php wp_head(); ?>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//webanalytics.digiaiiris.com/js/";
    _paq.push(['setTrackerUrl', u+'tracker.php']);
    _paq.push(['setSiteId', '292']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'piwik.min.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header class="site-header" role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
			<div class="mobile-only">
				<div class="navbar navbar-expand-lg navbar-light">
					<div class="navbar-brand">
						<div class="navbar-burger burger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="mobile-logo is-mobile columns is-vcentered">
							<a href="<?= pll_home_url(pll_current_language());?>"><img src="<?= get_field('logo_white', pll_current_language('slug'))['url']; ?>" alt="<?= the_field('name', pll_current_language('slug')) ?>" class="navbar_logo"></a>
						</div>
						<div class="languages">
							<ul><?php pll_the_languages(array(
									'force_home' => true,
									'display_names_as' => 'slug'
								)); ?>
								<li>
									<a href="<?= pll_home_url(pll_current_language()) ?>?s=">
										<img src="<?= get_template_directory_uri() ?>/assets/images/search.svg" alt="search"/>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="mobile-menu-panel">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-menu',
					));
					?>
				</div>
			</div>
			<div class="container desktop-only">
				<div class="navbar navbar-expand-lg navbar-light">
					<div class='navbar-brand'>
						<a href="<?= pll_home_url(pll_current_language()) ?>"><img src="<?= get_field('logo_white', pll_current_language('slug'))['url']; ?>" alt="<?= the_field('name', pll_current_language('slug')) ?>" class="navbar_logo"></a>
					</div>
					<div class='collapse navbar-collapse' id="navbarText">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary-menu',
						));
						?>
					</div>
					<div class="languages">
							<ul><?php pll_the_languages(array(
									'force_home' => true,
									'display_names_as' => 'slug'
								)); ?>
								<li>
									<a href="<?= pll_home_url(pll_current_language()) ?>?s=">
										<img src="<?= get_template_directory_uri() ?>/assets/images/search.svg" alt="search" class="search"/>
									</a>
								</li>
							</ul>
					</div>
				</div>
			</div>
		</header>
