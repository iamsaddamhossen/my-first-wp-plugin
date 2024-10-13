<?php
/*
* Plugin Name: My First Plugin
* Plugin URI: https://saddam.dev/
* Description: This is my first plugin.
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Saddam Hossen
* Author URI: https://saddam.dev/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/my-plugin/
* Text Domain: mfp
* Domain Path: /languages
*/


/**
 * Global Variables
 */
$mfp_prefix = "mfp_";
$mfp_plugin_name = "My First Plugin";

// retrieve our plugin settings from the options table
$mfp_options = get_option('mfp_settings');
 

 /**
 * Includes
 */

 include('includes/scripts.php'); // this controls all JS/CSS
 include('includes/data-processing.php'); // this controls all saving of data 
 include('includes/display-functions.php'); // display content functions
 include('includes/admin-page.php'); // the plugin options pages HTML