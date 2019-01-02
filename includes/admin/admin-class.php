<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class |UNIQUESTRING|AdminMain
{

	public $plugin_name;

	/*
	* |UNIQUESTRING|AdminMain constructor
	*/
	public function __construct()
	{

		$this->plugin_name = |UNIQUESTRING|_PLUGN_BASE_NAME;

	}

	/*
	* Additional classes
	*/
	public function |uniquestring|_additional_classes()
	{

		// for example CPT, enqueue_scripts etc.

	}

	/*
	* Controllers Connection
	*/
	public function |uniquestring|_controllers_collection()
	{

		// main menu item
		|UNIQUESTRING|_Route::|uniquestring|_get( 'MainMenuController', 'index', 'some_slug', [
			'page_title' => 'Some title',
			'menu_title' => 'Name of Main menu Item'
		] );

		|UNIQUESTRING|_Route::|uniquestring|_get( 'MainMenuController', 'index', 'some_slug2', [
			'page_title' => 'Some title2',
			'menu_title' => 'Name 2'
		] );

	}

}

// Initialize
$initialize_admin_class = new |UNIQUESTRING|AdminMain();

// include classes
$initialize_admin_class->|uniquestring|_additional_classes();

// include controllers
$initialize_admin_class->|uniquestring|_controllers_collection();