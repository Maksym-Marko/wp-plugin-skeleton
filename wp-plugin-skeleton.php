<?php
/*
Plugin Name: WP Plugin skeleton
Plugin URI: https://github.com/Maxim-us/wp-plugin-skeleton
Description: Some description...
Author: Marko Maksym
Version: 1.0
Author URI: https://github.com/Maxim-us
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Unique string - |UNIQUESTRING|
*/

/*
* Define |UNIQUESTRING|_PLUGIN_PATH
*/
if ( ! defined( '|UNIQUESTRING|_PLUGIN_PATH' ) ) {

	define( '|UNIQUESTRING|_PLUGIN_PATH', __FILE__ );

}

/*
* Define |UNIQUESTRING|_PLUGIN_URL
*/
if ( ! defined( '|UNIQUESTRING|_PLUGIN_URL' ) ) {

	// Return http://my-domain.com/wp-content/plugins/wp-plugin-skeleton/
	define( '|UNIQUESTRING|_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define |UNIQUESTRING|_PLUGN_BASE_NAME
*/
if ( ! defined( '|UNIQUESTRING|_PLUGN_BASE_NAME' ) ) {

	// Return share-buddypress-activity-pluso/share-buddypress-activity-pluso.php
	define( '|UNIQUESTRING|_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

/*
* Include the main |UniqueClassMame| class
*/
if ( ! class_exists( '|UniqueClassMame|' ) ) {

	require_once plugin_dir_path( __FILE__ ) . '/includes/class-final-main-class.php';

	// Create new instance
	new |UniqueClassMame|();

	/*
	* Registration hooks
	*/
	// Activation
	register_activation_hook( __FILE__, array( '|UNIQUESTRING|BasisPluginClass', 'activate' ) );

	// Deactivation
	register_deactivation_hook( __FILE__, array( '|UNIQUESTRING|BasisPluginClass', 'deactivate' ) );

}