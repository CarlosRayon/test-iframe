<?php

/*
Plugin Name: Alares Iframe Forms
Plugin URI: alares.es
Description: Plugin para cargar los iframe de los formularios
Version: 1.0.0
Author: Desarrollo Alares
Author URI: Alares.es
License:GPL
*/

defined('ABSPATH') or die("Bye bye");
define('AIFORMS_ROUTE', plugin_dir_path(__FILE__));

include(AIFORMS_ROUTE . '/includes/functions.php');

/* Enable/disabled plugin */
register_activation_hook(__FILE__, 'aiforms_enable');
register_deactivation_hook(__FILE__, 'aiforms_disabled');

/* If plugin is active */
add_action('init', 'aiforms_shortcodes_init');
