<?php
function enqueueCss()
{
	wp_register_style('bridge-child', get_stylesheet_directory_uri() . '/style.css');
	wp_register_style('bridge-child-header', get_stylesheet_directory_uri() . '/header.css', '1.0');
	wp_register_style('bridge-child-buttons', get_stylesheet_directory_uri() . '/buttons.css', '1.0');
	wp_register_style('bridge-child-links', get_stylesheet_directory_uri() . '/links.css', '1.0');
	wp_register_style('bridge-child-footer', get_stylesheet_directory_uri() . '/footer.css', '1.0');
	wp_register_style('bridge-child-posts', get_stylesheet_directory_uri() . '/posts.css', '1.0');
	wp_register_style('bridge-child-forms', get_stylesheet_directory_uri() . '/forms.css', '1.0');
	wp_register_style('bridge-child-wpuf', get_stylesheet_directory_uri() . '/wpuf.css', '1.0');
	wp_enqueue_style('bridge-child');
	wp_enqueue_style('bridge-child-header');
	wp_enqueue_style('bridge-child-buttons');
	wp_enqueue_style('bridge-child-links');
	wp_enqueue_style('bridge-child-posts');
	wp_enqueue_style('bridge-child-forms');
	wp_enqueue_style('bridge-child-footer');
	wp_enqueue_style('bridge-child-wpuf');
}

function logoutWithoutConfirm($action)
{
	/**
	 * Allow logout without confirmation
	 */
	if ($action == "log-out" && !isset($_GET['_wpnonce'])) {
		$redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : '/';
		$location = str_replace('&amp;', '&', wp_logout_url($redirect_to));
		header("Location: $location");
		die;
	}
}

add_action('wp_enqueue_scripts', 'enqueueCss', 11);
add_action('check_admin_referer', 'logoutWithoutConfirm', 10, 2);