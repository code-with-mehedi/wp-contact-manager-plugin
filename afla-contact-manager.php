<?php
/*
Plugin Name: Alfa Contact Manager
Plugin URI: #
Description: This plugin will give you option to add add, edit, delete contacts
Version: 1.0.0
Author: Mehedi Hasan
Author URI: https://www.codewithmehedi.com
License: GPLv2 or later
Text Domain: alfacm
*/

if(!defined('ABSPATH')){
    die;
}

// Define plugin url.
if(!defined('ALFA_API_PLUGIN_URL')){
    define('ALFA_API_PLUGIN_URL', plugin_dir_url(__FILE__));
}

// Define plugin path.
if(!defined('ALFA_API_PLUGIN_PATH')){
    define('ALFA_API_PLUGIN_PATH', plugin_dir_path(__FILE__));
}


// Load vendor autoloader
if(file_exists(ALFA_API_PLUGIN_PATH . 'vendor/autoload.php')){
    require_once ALFA_API_PLUGIN_PATH . 'vendor/autoload.php';
}

use Alfa\Inc\DB;
use Alfa\Inc\admin\Admin;

new Admin();

// Create tables on plugin activation
register_activation_hook( __FILE__, "alfacm_activate" );

// Activate Plugin
function alfacm_activate() {

	// Insert DB Tables
	DB::createContactsTables();

}