<?php

/* Solo se ejecuta la desinstalacion si es WordPress quien lo solicita */
defined('ABSPATH') or die("Bye bye");

if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

/* TODO we can do somethings */

/* Delete plugins options */
// delete_option('iform_option');

/* MultiSites */
// delete_site_option('iform_option');
