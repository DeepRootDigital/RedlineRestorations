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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=648638865176460";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
<div class="fixed-menu-bar">
		<a href="http://clients.businessonmarketst.com/redline/"><img src="<?php echo get_template_directory_uri() ?>/images/redline-header-logo.png" /></a>
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
<?php $mainoptions = get_option('main_theme_options'); ?>
	    <a href="#" alt="blah" class="close-button"><span>Close</span>Social</a>
	    <a href="<?php echo $mainoptions['facebookurl']; ?>"><div class="social-icons facebook"></div></a>
		<div class="social-separator"></div>
		<a href="<?php echo $mainoptions['twitterurl']; ?>"><div class="social-icons twitter"></div></a>
		<div class="social-separator"></div>
		<a href="<?php echo $mainoptions['pinteresturl']; ?>"><div class="social-icons pinterest"></div></a>
		<div class="social-separator"></div>
		<a href="<?php echo $mainoptions['youtubeurl']; ?>"><div class="social-icons video"></div></a>
		<div class="social-separator"></div>
		<a href="<?php echo $mainoptions['instagramurl']; ?>"><div class="social-icons instagram"></div></a>
	</div>