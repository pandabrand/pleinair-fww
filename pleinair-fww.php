<?php
/**
 * Plugin Name: Plein Air Archive - Customizations
 * Plugin URI: https://pandabrand.net
 * Description: Customizations for the Plein Air CMS site
 * Version: 0.0.1
 * Author: Frederick Wells
 * Author URI: https://pandabrand.net
 * Text Domain: pleinair-cms
 * Domain Path: /languages
 * Requires at least: 4.7.0
 * Requires PHP: 7.3
 * License: GPL-3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * 
 * @category General
 * @package  PleinAirPandabrand
 * @author   Frederick Wells <pandabrand@pandabrand.net>
 * @license  GPL-3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link     https://pandabrand.net
 **/

if (! defined('WPINC')) {
    wp_die();
}


register_activation_hook(__FILE__, 'plugin_run_init');

function plugin_run_init()
{
    run_filters();
}

function run_filters()
{
    add_filter('acf/settings/save_json', 'Pap_ACF_JSON_save');
}

function Pap_ACF_JSON_save($path)
{
    $path = get_stylesheet_directory() . '/acf';
    return $path;
}