<?php

if(!function_exists('bridge_qode_child_theme_enqueue_scripts')) {

	function bridge_qode_child_theme_enqueue_scripts() {
		wp_register_style('bridge-child', get_stylesheet_directory_uri() . '/style.css');
		wp_register_style('bridge-child-header', get_stylesheet_directory_uri() . '/header.css', '1.0');
		wp_register_style('bridge-child-buttons', get_stylesheet_directory_uri() . '/buttons.css', '1.0');
		wp_enqueue_style('bridge-child');
		wp_enqueue_style('bridge-child-header');
		wp_enqueue_style('bridge-child-buttons');
	}

	add_action('wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11);
}