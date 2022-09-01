<?php namespace Alfa\Inc;

class DB 
{

    public static function createContactsTables() 
    {
        // WP Globals
        global $wpdb;

        // Customer Table
        $peopleTable = $wpdb->prefix . 'peoples';

        // Create peoples Table if not exist
        if( $wpdb->get_var( "show tables like '$peopleTable'" ) != $peopleTable ) {

            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $peopleTable (
            ID INT(11) NOT NULL AUTO_INCREMENT,
            name VARCHAR(500) NOT NULL,
            email VARCHAR(500) NOT NULL,
            visible TINYINT NULL,
            PRIMARY KEY  (ID)
            ) $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            // Create Table
            dbDelta( $sql );
        }

         // Contacts Table
        $contactTable= $wpdb->prefix . 'contacts';

        // Create Customer Table if not exist
        if( $wpdb->get_var( "show tables like '$contactTable'" ) != $contactTable ) {

            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $contactTable (
            ID INT(11) NOT NULL AUTO_INCREMENT,
            CountryCode VARCHAR(500) NOT NULL,
            Number INT(11) NOT NULL,
            peoplesID INT,
            FOREIGN KEY(peoplesID) REFERENCES $peopleTable(ID),
            PRIMARY KEY  (ID)
            ) $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            // Create Table
            dbDelta( $sql );
        }

    }
}