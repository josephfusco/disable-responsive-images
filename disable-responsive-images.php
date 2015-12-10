<?php
/*
Plugin Name: Disable Responsive Images
Description: Disables responsive images introduced in 4.4. This plugin is only meant to be a temporary solution to fixing conflicts with certain plugins and themes. Responsive images drive the web forward.
Author: Joseph Fusco
Version: 1.0.0
Author URI: http://josephfus.co/
*/

remove_filter( 'the_content', 'wp_make_content_images_responsive' );

?>