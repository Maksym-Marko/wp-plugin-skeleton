<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*
* Require template for admin panel
*/
function mxsbap_require_template_admin( $file ) {

	require_once MXSBAP_PLUGIN_ABS_PATH . 'includes\admin\templates\\' . $file;

}