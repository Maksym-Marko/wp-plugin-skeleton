<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class |UNIQUESTRING|_Route_Registrar
{
	
	/**
	* set controller
	*/
	public $controller = '';

	/**
	* set action
	*/
	public $action = '';

	/**
	* set slug
	*/
	public $slug = |UNIQUESTRING|_MAIN_MENU_SLUG;

	/**
	* set properties
	*/
	public $properties = [
		'page_title' 	=> 'Title of the page',
		'menu_title' 	=> 'Link Name',
		'capability' 	=> 'manage_options',
		'menu_slug' 	=> |UNIQUESTRING|_MAIN_MENU_SLUG,
		'function' 		=> '|uniquestring|_view_connector',
		'dashicons' 	=> 'dashicons-image-filter',
		'position' 	=> 111
	];

	public function __construct($controller, $action, $slug, $menu_properties)
	{

		$this->|uniquestring|_set_data( $controller, $action, $slug, $menu_properties );

	}

	/**
	* $controller 		- Controller
	*
	* $action 			- Action
	*
	* $slug 			- if NULL - menu item will investment into
	*						|UNIQUESTRING|_MAIN_MENU_SLUG menu item
	*
	* $menu_position 	- menu position
	*
	*/
	public function |uniquestring|_set_data( $controller, $action, $slug = |UNIQUESTRING|_MAIN_MENU_SLUG, array $menu_properties )
	{

		// set controller
		$this->controller = $controller;

		// set action
		$this->action = $action;

		// set slug
		if( $slug == NULL ) {

			$this->slug = |UNIQUESTRING|_MAIN_MENU_SLUG;

		} else {

			$this->slug = $slug;

		}	

		// set properties
		foreach ( $menu_properties as $key => $value ) {
			
			$this->properties[$key] = $value;

		}

		// register admin menu
		add_action( 'admin_menu', array( $this, '|uniquestring|_create_admin_menu' ) );

	}

	/**
	* Create Main menu
	*/
	public function |uniquestring|_create_admin_menu()
	{
			
		add_menu_page( __( $this->properties['page_title'], '|uniquestring|-domain' ),
			 __( $this->properties['menu_title'], '|uniquestring|-domain' ),
			 $this->properties['capability'],
			 $this->slug,
			 array( $this, '|uniquestring|_view_connector' ),
			 $this->properties['dashicons'], // icons https://developer.wordpress.org/resource/dashicons/#id
			 $this->properties['position'] );

	}

		public function |uniquestring|_view_connector()
		{
			echo '123';
		}

}