<?php
/*
Plugin Name: Disable Responsive Images
Description: Disables responsive images introduced in 4.4. This plugin is only meant to be a temporary solution to fixing conflicts with certain plugins and themes. Responsive images drive the web forward.
Author: Joseph Fusco
Version: 1.0.0
Author URI: http://josephfus.co/
*/

add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
	if(isset($attr['sizes']))
		unset( $attr['sizes']);

	if(isset($attr['srcset']))
		unset($attr['srcset']);

	return $attr;

}, PHP_INT_MAX );

add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

remove_filter( 'the_content', 'wp_make_content_images_responsive' );

?>