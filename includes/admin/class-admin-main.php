<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class |UNIQUESTRING|AdminMain
{

	public $plugin_name;

	public function __construct()
	{

		$this->plugin_name = |UNIQUESTRING|_PLUGN_BASE_NAME;

	}

	// Register function
	public function register()
	{

		// register scripts and styles
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );

		// register admin menu
		add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

		// add link Settings under the name of the plugin
		add_filter( "plugin_action_links_$this->plugin_name", array( $this, 'settings_link' ) );

	}

		public function enqueue()
		{

			wp_enqueue_style( '|uniquestring|_font_awesome', |UNIQUESTRING|_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

			wp_enqueue_style( '|uniquestring|_admin_style', |UNIQUESTRING|_PLUGIN_URL . 'includes/admin/assets/css/style.css', array( '|UNIQUESTRING|_font_awesome' ), |UNIQUESTRING|_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( '|uniquestring|_admin_script', |UNIQUESTRING|_PLUGIN_URL . 'includes/admin/assets/js/script.js', array( 'jquery' ), |UNIQUESTRING|_PLUGIN_VERSION, false );

		}

		// register admin menu
		public function add_admin_pages()
		{

			add_menu_page( 'Title of the page', 'Link Name', 'manage_options', '|unique_link_page|', array( $this, 'admin_index' ), '', 111 );

		}

			public function admin_index()
			{
				echo '<h1>Title</h1>';
			}

		// add settings link
		public function settings_link( $links )
		{

			$settings_link = '<a href="options-general.php?page=|unique_link_page|">Settings</a>';

			array_push( $links, $settings_link );

			return $links;

		}

}

// Initialize
$initialize_class = new |UNIQUESTRING|AdminMain();

// Apply scripts and styles
$initialize_class->register();