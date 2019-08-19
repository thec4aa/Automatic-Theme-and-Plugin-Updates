<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/thec4aa
 * @since             1.0.1
 * @package           Automatic-Theme-and-Plugin-Updates
 *
 * @wordpress-plugin
 * Plugin Name:       Automatic Theme and Plugin Updates
 * Plugin URI:        https://github.com/thec4aa/Automatic-Theme-and-Plugin-Updates
 * Description:       A simple plugin to auto update themes and plugins. Core updates can be configured in /wp-config.
 * Version:           1.0.1
 * Author:            Center for Artistic Activism
 * Author URI:        https://github.com/thec4aa
 * License:           GPL-3.0
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.1' );

/* The guts of the plugin */

add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );

?>