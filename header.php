	<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php $viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, viewport-fit=cover'); ?>
	<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../app/fonts/font-face.css">
	<script type="text/javascript" src="../app/plugins/hls.min.js"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#2a2a2a">
</head>

<body <?php body_class(); ?>>

	<?php hello_elementor_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e('Skip to content', 'hello-elementor'); ?></a>

	<div class="header-test"></div>

	<?php
	if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
		if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
			get_template_part('template-parts/dynamic-header');
		} else {
			get_template_part('template-parts/header');
		}
	}
