<?php

/*
Plugin Name: Jahopp Wordle
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: krist
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
	echo 'Access denied';
	exit;
}

define( 'JAHOPP_WORDLE_PATH', plugin_dir_path( __FILE__ ) );

include_once( 'jahopp-wordle-front.php' );

function jahopp_wordle_script() {
	wp_enqueue_style(
		'jahopp_wordle_style',
		plugins_url( 'css/jahopp-wordle-style.css', __FILE__ ),
		'',
		'1.0'
	);
	wp_enqueue_script(
		'jahopp_wordle_script',
		plugins_url( 'js/jahopp-wordle-script.js', __FILE__ ),
		array( 'jquery' ),
		'1.0',
		true
	);
}

add_action( 'wp_enqueue_scripts', 'jahopp_wordle_script' );