<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=DM+Serif+Text:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo site_icon_url() ?>">
	<title><?php wp_title(''); ?> <?php if(wp_title('',false)){echo':';} ?> <?php bloginfo('name') ?></title>
	<meta name="theme-color" content="#ec6a03"/>
	<meta name="msapplication-navbutton-color" content="#ec6a03" data-url="<?php echo get_stylesheet_directory_uri(); ?>"/>
	<style>
		:root{
		--url-path-theme: <?php echo get_stylesheet_directory_uri(); ?>;
		}
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a href="<?php the_field('linkwss','option')?>" target="_blank" class="whatsppFloating">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/
		whastapp.png"alt="">
	</a>
	<div id="page">
		<div id="contenido" >