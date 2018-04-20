<?php
/**
 * This file contains a function which checks if the MP Easy Icons plugin is installed.
 *
 * @since 1.0.0
 *
 * @package    Church Plant Theme Bundle
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */

/**
* Check to make sure the MP Easy Icons Plugin is installed.
*
* @since    1.0.0
* @link     http://mintplugins.com/doc/plugin-checker-class/
* @return   array $plugins An array of plugins to be installed. This is passed in through the mp_core_check_plugins filter.
* @return   array $plugins An array of plugins to be installed. This is passed to the mp_core_check_plugins filter. (see link).
*/
if (!function_exists('mp_easy_icons_plugin_check')){
	function mp_easy_icons_plugin_check( $plugins ) {

		$add_plugins = array(
			array(
				'plugin_name' => 'MP Easy Icons',
				'plugin_message' => __('You require the MP Easy Icons plugin. Install it here.', 'growing_church_theme_bundle'),
				'plugin_filename' => 'mp-easy-icons.php',
				'plugin_download_link' => 'https://mintplugins.com/repo/mp-easy-icons/?downloadfile=true',
				'plugin_info_link' => 'https://mintplugins.com/plugins/mp-easy-icons',
				'plugin_group_install' => true,
				'plugin_required' => true,
				'plugin_wp_repo' => true,
			)
		);

		return array_merge( $plugins, $add_plugins );
	}
}
add_filter( 'mp_core_check_plugins', 'mp_easy_icons_plugin_check' );
