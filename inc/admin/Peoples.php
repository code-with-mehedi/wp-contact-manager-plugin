<?php namespace Alfa\Inc\admin;

class Peoples
{

    public static function alfa_get_peoples() {
        
        global $wpdb;
        $tablename = $wpdb->prefix . "peoples";
        
       return $wpdb->get_results("SELECT * FROM $tablename");
        
    }
}