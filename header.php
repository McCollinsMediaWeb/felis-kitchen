<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package feliskitchen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
    <meta name="msapplication-TileColor" content="#D50132">
    <meta name="msapplication-TileImage" content="favicon.png">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#D50132" />
    <meta name="msapplication-navbutton-color" content="#D50132">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <title>Felis Kitchen</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://mccollinsmediaweb.github.io/felis-kitchen/assets/css/fl-plugins.css">
    <link rel="stylesheet" href="https://mccollinsmediaweb.github.io/felis-kitchen/assets/css//fl-main.css?ver=1.498121">
    <link rel="icon" type="image/x-icon" href="https://mccollinsmediaweb.github.io/felis-kitchen/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alice&family=Cairo:wght@400;500;600&display=swap" rel="stylesheet">
	<meta name="google-site-verification" content="Osf00TuBr2WF52Nrt2IhSHlWRkZG8u4dLcnLdK8GCGg" />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

