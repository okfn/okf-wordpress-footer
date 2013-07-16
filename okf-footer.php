<?php

	/*
	  Plugin Name: OKF Footer
	  Plugin URI: https://github.com/okfn/okf-wordpress-footer
	  Version: 0.0.1
	  Author: Mint Canary
	  Author URI: http://www.mintcanary.com/
	  Description: Global footer for all Open Knowledge Foundation websites
	  Text Domain: okf-footer
	  Domain Path: /languages
	  License: GPL3
	 */

	// Include Sunrise Plugin Framework class
	require_once 'classes/sunrise.class.php';

	// Create plugin instance
	$okffooter = new Sunrise_Plugin_Framework;

	$okffooter->add_settings_page( array(
		'parent' => 'options-general.php',
		'page_title' => $okffooter->name,
		'menu_title' => $okffooter->name,
		'capability' => 'manage_options',
		'settings_link' => true
	) );

	// Include plugin actions
	require_once 'inc/plugin-actions.php';

	// Make plugin meta translatable
	__( 'Global footer for all Open Knowledge Foundation websites', $okffooter->textdomain );
?>