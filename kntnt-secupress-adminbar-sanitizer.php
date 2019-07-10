<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Adminbar Sanitizer for Secupress
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Removes Secupress from adminbar.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined('ABSPATH') || die;

add_filter('kntnt_admin_bar_sanitizer_remove_list', function ($remove_list) {
    $remove_list[] = 'secupress';
    return $remove_list;
});
