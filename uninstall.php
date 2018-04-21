<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// TODO
if ( __FILE__ != WP_UNINSTALL_PLUGIN ) :

    return;
    
else :

    |uniquestring|_uninstall();

endif;


function |uniquestring|_uninstall(){
            
    global $wpdb;
    
    // table name
    $table_names = array();

    $table_names[] = $wpdb->prefix . '|uniquestring|_table_slug';

    // drop table(s);
    foreach( $table_names as $table_name ){

        $sql = 'DROP TABLE IF EXISTS ' . $table_name . ';';

        $wpdb->query($sql);

    }

    delete_option( 'some_option' );

}