<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>Redline Restorations</title>
	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/6f0a6d23-c087-4412-9761-ba16bbdef6cd.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css" />
</head>
<body>
	<div class="fixed-menu-bar">
		<a href="http://localhost/wordpress/"><img src="<?php echo get_template_directory_uri() ?>/images/redline-header-logo.png" /></a>
		<?php 
                $args = array(
                    'theme_location' => 'Left Navigation Menu',
                    'menu' => 'RR topmenu',

                    );
                    wp_nav_menu($args); ?>
	</div>
	<div class="fixed-social-menu">
	</div>
	<div class="fixed-social-icons">
	    <a href="#" alt="blah" class="close-button"><span>Close</span>Social</a>
		<img src="<?php echo get_template_directory_uri(); ?>/images/social-icon-fb.png" class="social-icons" />
		<div class="social-separator"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/social-icon-twitter.png" class="social-icons" />
		<div class="social-separator"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/social-icon-pin.png" class="social-icons" />
		<div class="social-separator"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/social-icon-video.png" class="social-icons" />
		<div class="social-separator"></div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/social-icon-instagram.png" class="social-icons" />
	</div>