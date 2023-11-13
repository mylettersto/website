<?php

//init variables
$html               = "";
$image_classes      = "";
$image_src          = $image;
$hover_image_src    = $hover_image;
$images_styles      = "";

if (is_numeric($image)) {
    $image_src = wp_get_attachment_url($image);
	$image_alt_meta = get_post_meta($image, '_wp_attachment_image_alt', true);
	$image_alt = ! empty( $image_alt_meta ) ? $image_alt_meta : esc_html__( 'Main Image', 'bridge' );
}

if (is_numeric($hover_image)) {
    $hover_image_src = wp_get_attachment_url($hover_image);
	$hover_image_alt_meta = get_post_meta($hover_image, '_wp_attachment_image_alt', true);
	$hover_image_alt = ! empty( $hover_image_alt_meta ) ? $hover_image_alt_meta : esc_html__( 'Hover Image', 'bridge' );
}

if($hover_image_src != "") {
    $image_classes .= "active_image ";
}

$css_transition_delay = ($transition_delay != "" && $transition_delay > 0) ? $transition_delay / 1000 . "s" : "";

$animate_class = ($animation == "yes") ? "hovered" : "";

//generate output
$html .= "<div class='image_hover {$animate_class}' style='' data-transition-delay='{$transition_delay}'>";
$html .= "<div class='images_holder'>";

if($link != "") {
    $html .= "<a itemprop='url' href='{$link}' target='{$target}'>";
}

$html .= "<img itemprop='image' class='{$image_classes}' src='{$image_src}' alt='{$image_alt}' style='{$images_styles}' />";
$html .= "<img itemprop='image' class='hover_image' src='{$hover_image_src}' alt='{$hover_image_alt}' style='{$images_styles}' />";

if($link != "") {
    $html .= "</a>";
}

$html .= "</div>"; //close image_hover
$html .= "</div>"; //close images_holder

echo bridge_qode_get_module_part( $html );