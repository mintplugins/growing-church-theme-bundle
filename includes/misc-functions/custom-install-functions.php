<?php
/**
 * Custom Installation Functions for the Growing Church Theme Bundle. Make custom changes for installation here.
 *
 * Find and replace: Growing Church Theme Bundle
 * Find and replace: growing_church_theme_bundle
 * Find and replace: growing-church-theme-bundle
 * Find and replace: Growing Church
 * 
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks + Growing Church
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2015, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Returns the array of the custom theme mods for this theme. As a developer, you can get this array under "Appearance" > "Export Customizer" with the MP Stacks + Developer Add-On.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    void
 * @return   array
 */
function growing_church_theme_bundle_theme_mods(){
			
	return array ( 
		0 => false, 
		
		'mp_core_logo' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/11/church-logo-here.png', 
		
		'mp_core_logo_width' => '100',

		'mp_knapstack_font_family' => 'Open Sans:Light,300 ',
		
		'mp_knapstack_text_color' => '#2b4243',
		
		'mp_knapstack_subtext_color' => '#3d5b5d',
		
		'mp_knapstack_button_submit' => '#2ba8e2',
		
		'mp_knapstack_button_hover' => '#009be2',
		
		'mp_stacks_footer_stack' => '5',
		
		'nav_menu_locations' => array ( 
			'primary' => 6,
		),
		
		'mp_menu_toggle_color' => '#ffffff',
		
		'mp_menu_open_from' => 'mp-menu-right.css',
		
		'mp_menu_bg_color' => '#ffffff',
		
		'mp_menu_text_color' => '#2d2d2d',
		
		'mp_knapstack_page_header_bg_color' => '#3a3a3a',
		
	);
	
}
add_filter( 'mp_stacks_required_theme_mods_for_' . 'growing_church_theme_bundle', 'growing_church_theme_bundle_theme_mods' );

/**
 * Return what the dirname of the theme we wish to use should be. 
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $theme_dir_name
 * @return   string $theme_dir_name
 */
function growing_church_theme_bundle_required_theme_dirname_custom( $theme_dir_name ){
	return 'knapstack';
}
add_filter( 'growing_church_theme_bundle_required_theme_dirname', 'growing_church_theme_bundle_required_theme_dirname_custom' );

/**
 * Return what the Fancy Name of theme we wish to use should be. This is the title in the theme's style.css file.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $fancy_theme_name
 * @return   string $fancy_theme_name
 */
function growing_church_theme_bundle_fancy_theme_name_custom( $fancy_theme_name ){
	return 'Knapstack Theme';
}
add_filter( 'growing_church_theme_bundle_fancy_theme_name', 'growing_church_theme_bundle_fancy_theme_name_custom' );