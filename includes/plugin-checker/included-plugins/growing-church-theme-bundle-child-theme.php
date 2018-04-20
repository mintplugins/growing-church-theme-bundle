<?php
/**
 * This file contains a function which checks if the Growing Church Theme Bundle Child Theme is installed.
 *
 * @since 1.0.0
 *
 * @package    MP Core
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */

/**
* Check to make sure the Growing Church Theme Bundle Child Theme is installed.
*
* @since    1.0.0
* @link     http://mintplugins.com/doc/plugin-checker-class/
* @return   array $plugins An array of plugins to be installed. This is passed in through the mp_core_check_plugins filter.
* @return   array $plugins An array of plugins to be installed. This is passed to the mp_core_check_plugins filter. (see link).
*/
if (!function_exists('growing_church_theme_bundle_child_theme_plugin_check')){
	function growing_church_theme_bundle_child_theme_plugin_check( $plugins ) {

		//Because Switch_theme doesn't activate until a second page load, we need to double check if it's active here.
		$current_theme = wp_get_theme();
		if ( $current_theme->get( 'Name' ) != 'Growing Church Theme Bundle (Child Theme)' ){

			$add_plugins = array(
				array(
					'plugin_name' => 'Growing Church Theme Bundle (Child Theme)',
					'plugin_message' => __('You require the Growing Church Theme Bundle (Child Theme). Install it here.', 'growing_church_theme_bundle'),
					'plugin_filename' => '',
					'plugin_download_link' => plugin_dir_path( dirname( dirname( __FILE__ ) ) ) . 'child-theme/',
					'plugin_api_url' => 'local',
					'plugin_info_link' => 'http://mintplugins.com/plugins/growing-church-theme-bundle/',
					'plugin_group_install' => true,
					'plugin_licensed' => false,
					'plugin_licensed_parent_name' => 'Growing Church Theme Bundle',
					'plugin_required' => true,
					'plugin_wp_repo' => false,
					'plugin_is_theme' => true,
					'plugin_needs_unzipping' => false,
					'plugin_is_child_theme' => true,
					'plugin_dashed_slug' => 'growing-church-theme-bundle-child-theme',
				)
			);

			return array_merge( $plugins, $add_plugins );
		}
		else{
			return $plugins;
		}
	}
}
add_filter( 'mp_core_check_plugins', 'growing_church_theme_bundle_child_theme_plugin_check' );
