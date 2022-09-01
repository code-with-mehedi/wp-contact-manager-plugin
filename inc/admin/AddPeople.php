<?php namespace Alfa\Inc\admin;

class AddPeople
{
    public function __construct()
    {
        add_action('init', array($this, 'alfa_insert_user_to_database'));
    }

    public function alfa_insert_user_to_database($data) {

        if( !isset( $data['alfa-add-people'] ) )
            return;
        
        global $wpdb;
        $tablename = $wpdb->prefix . "peoples";
        $name     = $data['name']; //string value use: %s
        $email    = $data['email']; //string value use: %s
        $sql = $wpdb->prepare("INSERT INTO `$tablename` (`name`, `email`) values (%s, %s)", $name, $email);
        $wpdb->query($sql);


        
    }
}