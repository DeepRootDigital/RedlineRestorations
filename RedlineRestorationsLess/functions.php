<?php

/* Autocracy Dependencies */
require_once ( get_template_directory() . '/autocracy/autocracy.php' );
require_once ( get_template_directory() . '/autocracy/homepage-manager.php' );
require_once ( get_template_directory() . '/autocracy/sidebar-manager.php' );
require_once ( get_template_directory() . '/autocracy/theme-manager.php' );
require_once ( get_template_directory() . '/autocracy/service-manager.php' );
// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';

/* Add Theme Supports */
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* Register Menu Areas */
register_nav_menu('Header Nav - Left', 'Left Navigation Menu');

function autoc_get_img($id) {

	global $wpdb;
	$images = get_post_meta( get_the_ID(), $id, false );
	$images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
	$images = $wpdb->get_col( "
		SELECT ID FROM {$wpdb->posts}
		WHERE post_type = 'attachment'
		AND ID in ({$images})
		ORDER BY menu_order ASC
		" );

	foreach ( $images as $att )
	{
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
		$src = wp_get_attachment_image_src( $att, 'full' );
		$src = $src[0];
    // Show image
		echo "<img src='{$src}' />";
	}

}

/* Register Custom Post Types */

function create_post_type() {
	register_post_type('mainpage', array(
		'labels' => array(
			'name' => __('Mainpage'),
			'singular_name' => __('Mainpage')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'mainpage'),
		)
	);
}
add_action('init', 'create_post_type');

/*
 * Register our sidebars and widgetized areas.
 *
 */

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>