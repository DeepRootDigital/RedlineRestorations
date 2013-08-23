<?php
add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');
/**
 * Init plugin options to white list our options
 */
function theme_options_init() {
	register_setting('sample_options', 'sample_theme_options', 'theme_options_validate');
	register_setting('main_options', 'main_theme_options', 'main_theme_options_validate');
	register_setting('sidebar_options', 'sidebar_theme_options', 'sidebar_theme_options_validate');
	register_setting('service_options', 'service_theme_options', 'service_theme_options_validate');
}
/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page(__('Homepage Manager', 'sampletheme'), __('Homepage Manager', 'sampletheme'), 'edit_theme_options', 'sample_theme_options', 'theme_options_do_page');
	add_theme_page(__('Theme Manager', 'sampletheme'), __('Theme Manager', 'sampletheme'), 'edit_theme_options', 'main_theme_options', 'main_theme_options_do_page');
	add_theme_page(__('Sidebar Manager', 'sampletheme'), __('Sidebar Manager', 'sampletheme'), 'edit_theme_options', 'sidebar_theme_options', 'sidebar_theme_options_do_page');
	add_theme_page(__('Service Manager', 'sampletheme'), __('Service Manager', 'sampletheme'), 'edit_theme_options', 'service_theme_options', 'service_theme_options_do_page');
}
?>