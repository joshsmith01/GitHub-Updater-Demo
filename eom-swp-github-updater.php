<?php

/*
Plugin Name: EOM SWP Github Updater
Plugin URI: https://github.com/joshsmith01/GitHub-Updater-Demo
Description: Create a throw away plugin that can be used to demonstrate the installation and update process to
Version: 0.1.12
Author: Josh Smith
Author URI: http://www.efficiencyofmovement.com

GitHub Branch: master
GitHub Plugin URI: https://github.com/joshsmith01/GitHub-Updater-Demo
*/

/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
		'example_dashboard_widget',         // Widget slug.
		'Example Dashboard Widget',         // Title.
		'example_dashboard_widget_function' // Display function.
	);
}

add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

	// Display whatever it is you want to show.
	echo "Hello World, I'm a great Dashboard Widget";
}


// Load the stylesheet from the plugin. -JMS
function load_custom_wp_admin_style() {
	wp_enqueue_style( 'eom-swp-github-updater-styles', plugins_url( '/css/eom-swp-github-updater-styles.css', __FILE__ ) );
}

add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );
