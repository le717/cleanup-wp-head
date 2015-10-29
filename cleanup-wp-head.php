<?php
/**
 * Plugin Name: Cleanup WP &lt;head&gt;
 * Plugin URI: https://github.com/le717/cleanup-wp-head
 * Description: Cleanup the <head> tag in the way I want.
 * Version: 1.0
 * Author: Caleb Ely
 * Author URI: http://codetriangle.me/
 * License: MIT
 */

function cleanup_header() {
  remove_action('wp_head', 'feed_links_extra');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_shortlink_wp_head');
  remove_action('wp_head', 'wlwmanifest');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
}

add_action('init', 'cleanup_header');
