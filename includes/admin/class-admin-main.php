<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class |UNIQUESTRING|AdminMain
{

	// Register function
	public function register()
	{

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

	}

		public function enqueue()
		{

			wp_enqueue_style( '|uniquestring|_font_awesome', |UNIQUESTRING|_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( '|uniquestring|_admin_style', |UNIQUESTRING|_PLUGIN_URL . 'includes/admin/assets/css/style.css', array( '|UNIQUESTRING|_font_awesome' ), |UNIQUESTRING|_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( '|uniquestring|_admin_script', |UNIQUESTRING|_PLUGIN_URL . 'includes/admin/assets/js/script.js', array( 'jquery' ), |UNIQUESTRING|_PLUGIN_VERSION, false );

		}

}

// Initialize
$initialize_class = new |UNIQUESTRING|AdminMain();

// Apply scripts and styles
$initialize_class->register();