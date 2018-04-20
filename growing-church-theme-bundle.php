<?php
/*
Plugin Name: Growing Church Theme Bundle
Plugin URI: https://mintplugins.com
Description: A bundle of Stack Templates, Plugins, a Theme, and everything needed for the Growing Church Theme Experience.
Version: 1.0.0.2
Author: Mint Plugins
Author URI: https://mintplugins.com
Text Domain: growing_church_theme_bundle
Domain Path: languages
License: GPL2
*/

/*  Copyright 2016  Mint Plugins  (email : support@mintplugins.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Mint Plugins Core.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Mint Plugins Core, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class GrowingChurchThemeBundle{

	/**
	 * Constructor
	 *
	 * @access   public
	 * @since    1.0.0
	 * @see      MP_Theme_Bundle_Creator::mp_stacks_create_theme_bundle_page()
	 * @see      MP_Theme_Bundle_Creator::mp_stacks_create_theme_bundle_function()
	 * @see      wp_parse_args()
	 * @param    array $args {
	 *      This array holds information the plugin
	 *		@type string 'theme_bundle_name' - The fancy, non-slugified name of the Theme Bundle.
	 * }
	 * @return   void
	 */
	 public function __construct(){

		 // Get the theme bundle info from the json file
		 $this->_theme_bundle_info = $this->get_theme_bundle_info();
		 $this->_theme_bundle_info_version = $this->_theme_bundle_info['version'];
		 $this->_theme_bundle_info_plugin_url = plugin_dir_url( __FILE__ );
		 $this->_theme_bundle_info_plugin_dir = plugin_dir_path( __FILE__ );
		 $this->_theme_bundle_info_plugin_file = __FILE__;

		 /**
		  * Parent Plugin Installation Class - used with activation hooks for plugins that are license and require other plugins
		  */
		 require( $this->_theme_bundle_info_plugin_dir . 'includes/misc-functions/class-parent-plugin-installation.php' );

		 /**
		  * Activation Hook Function - Gets Stack Pack License, Redirects to installation of dependencies, saves Theme MetaData.
		  */
		 register_activation_hook( $this->_theme_bundle_info_plugin_file, array( $this, 'theme_bundle_install' ) );

		 /*
		 |--------------------------------------------------------------------------
		 | CONSTANTS
		 |--------------------------------------------------------------------------
		 */

		 // Theme Bundle Array
		 if( !defined( $this->_theme_bundle_info['cap_slug'] . '_INFO' ) ) {
		 	define( $this->_theme_bundle_info['cap_slug'] . '_INFO', $this->_theme_bundle_info );
		 }

		 // Plugin version
		 if( !defined( $this->_theme_bundle_info['cap_slug'] . '_VERSION' ) )
		 	define( $this->_theme_bundle_info['cap_slug'] . '_VERSION', $this->_theme_bundle_info['version'] );

		 // Plugin Folder URL
		 if( !defined( $this->_theme_bundle_info['cap_slug'] . '_PLUGIN_URL' ) )
		 	define( $this->_theme_bundle_info['cap_slug'] . '_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

		 // Plugin Folder Path
		 if( !defined( $this->_theme_bundle_info['cap_slug'] . '_PLUGIN_DIR' ) )
		 	define( $this->_theme_bundle_info['cap_slug'] . '_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

		 // Plugin Root File
		 if( !defined( $this->_theme_bundle_info['cap_slug'] . '_PLUGIN_FILE' ) )
		 	define( $this->_theme_bundle_info['cap_slug'] . '_PLUGIN_FILE', __FILE__ );

		 // Hooked functions
		 add_action( 'init', array( $this, 'theme_bundle_admin_init' ) );
		 add_action( 'init', array( $this, 'text_domain' ) );
		 add_action( 'after_setup_theme', array( $this, 'include_files' ), 9) ;
		 add_filter( 'mp_core_parent_plugin_installation_complete_filter', array( $this, 'theme_bundle_initialize_default_items_setup' ), 10, 2 );
		 add_action( 'wp_die_handler', array( $this, 'theme_bundle_switch_theme_workaround' ) );
		 add_action( 'plugins_loaded', array( $this, 'theme_bundle_kill_edd_welcome' ) );
		 add_filter( 'mp_stacks_required_theme_mods_for_' . $this->_theme_bundle_info['slug'], array( $this, 'theme_bundle_theme_mods' ) );
		 add_filter( $this->_theme_bundle_info['slug'] . '_default_stacks', array( $this, 'set_up_default_stacks' ) );

	 }

	/*
	|--------------------------------------------------------------------------
	| INTERNATIONALIZATION
	|--------------------------------------------------------------------------
	*/

	public function text_domain() {

		// Set filter for plugin's languages directory
		$lang_dir = dirname( plugin_basename( $this->_theme_bundle_info_plugin_file ) ) . '/languages/';
		$lang_dir = apply_filters( $this->_theme_bundle_info['slug'] . '_languages_directory', $lang_dir );


		// Traditional WordPress plugin locale filter
		$locale        = apply_filters( 'plugin_locale',  get_locale(), $this->_theme_bundle_info['dashed_slug'] );
		$mofile        = sprintf( '%1$s-%2$s.mo', $this->_theme_bundle_info['dashed_slug'], $locale );

		// Setup paths to current locale file
		$mofile_local  = $lang_dir . $mofile;
		$mofile_global = WP_LANG_DIR . '/restore-church-theme-bundle/' . $mofile;

		if ( file_exists( $mofile_global ) ) {
			// Look in global /wp-content/languages/restore_church_theme_bundle folder
			load_textdomain( 'restore_church_theme_bundle', $mofile_global );
		} elseif ( file_exists( $mofile_local ) ) {
			// Look in local /wp-content/plugins/message_bar/languages/ folder
			load_textdomain( 'restore_church_theme_bundle', $mofile_local );
		} else {
			// Load the default language files
			load_plugin_textdomain( 'restore_church_theme_bundle', false, $lang_dir );
		}

	}

	/*
	|--------------------------------------------------------------------------
	| INCLUDES
	|--------------------------------------------------------------------------
	*/
	public function include_files(){

		/**
		 * If mp_core isn't active, stop and install it now
		 */
		if (!function_exists('mp_core_textdomain')){

			/**
			 * Include Plugin Checker
			 */
			require( $this->_theme_bundle_info_plugin_dir . '/includes/plugin-checker/class-plugin-checker.php' );

			/**
			 * Include Plugin Installer
			 */
			require( $this->_theme_bundle_info_plugin_dir . '/includes/plugin-checker/class-plugin-installer.php' );

			/**
			 * Check if mp_core in installed
			 */
			include_once( $this->_theme_bundle_info_plugin_dir . 'includes/plugin-checker/included-plugins/mp-core-check.php' );

		}
		//If mp_core IS Active
		else{

			//Check the validity of the license for this plugin (boolean)
			$plugin_vars = array(
				'plugin_name' => $this->_theme_bundle_info['fancy_name'],
				'plugin_api_url' => $this->_theme_bundle_info['plugin_api_url'],
			);

			$license_key_valid = mp_core_listen_for_license_and_get_validity( $plugin_vars );

			//If we don't have a valid license
			if( $license_key_valid != true ){

				/**
				 * Show license form at the top of admin pages
				 */
				new MP_CORE_Show_License_Form_In_Notices( array('plugin_name' => $this->_theme_bundle_info['fancy_name'] ) );

				/**
				 * Update script - keeps this plugin up to date
				 */
				add_action( 'admin_init', array( $this, 'theme_bundle_update' ) );


			}
			//If required Theme Bundle dependencies are not installed/active
			elseif( ! $this->theme_bundle_dependencies() ) {

				/**
				 * Update script - keeps this plugin up to date
				 */
				add_action( 'admin_init', array( $this, 'theme_bundle_update' ) );

				//Loop through each required plugin and check for it
				foreach( $this->_theme_bundle_info['dependencies'] as $function_exist_name => $checker_file_name ){

					/**
					 * Check the status of the required plugin and install it if not. Activate it if it is inactive
					 */
					require( $this->_theme_bundle_info_plugin_dir . 'includes/plugin-checker/included-plugins/' . $checker_file_name );

				}

			}
			/**
			 * Otherwise, if license passes and all required plugins are installed, carry out the plugin's functions
			 */
			else{

				/**
				 * Update script - keeps this plugin up to date
				 */
				add_action( 'admin_init', array( $this, 'theme_bundle_update' ) );

				// Loop through each Stack template files we want to include
				foreach( $this->_theme_bundle_info['stack_templates'] as $post_type => $mp_stacks ) {
					foreach( $mp_stacks as $mp_stack => $mp_stack_data ) {
						require( $this->_theme_bundle_info_plugin_dir . 'includes/stack-templates/' . $mp_stack_data['file_name'] );
					}
				}
			}
		}
	}

	/**
	 * Check for the existence of the theme bundle dependencies
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/
	 * @see      function_name()
	 * @param    array $args See link for description.
	 * @return   boolean
	 */
	public function theme_bundle_dependencies(){

		//These values come from each Stack template's Utility File and are pasted in
		$required_text_domain_strings = $this->_theme_bundle_info['dependencies'];

		//Loop through each textdomain
		foreach ( $required_text_domain_strings as $text_domain => $plugin_checker_file ){

			//If this function does not exist
			if ( !function_exists( $text_domain ) ){

				//If this is not a function but it is a class
				if ( class_exists( $text_domain ) ){
					return true;
				}

				//Return false
				return false;
			}

		}

		//Return true - all text domains required exist.
		return true;

	}

	/**
	 * The theme bundle array, containing all data unique to this theme bundle
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/
	 * @see      function_name()
	 * @param    array $args See link for description.
	 * @return   array
	 */
	public function get_theme_bundle_info(){

		$path = plugin_dir_path( __FILE__ ) . 'theme-bundle.json';

	    // We gotta get fancy here to include the json the way we need because some hosts block file opening options
	    ob_start();
	    include( $path );
	    $response = ob_get_clean();

		$theme_bundle = json_decode( $response, true );

		return $theme_bundle;

	}

	public function theme_bundle_install() {
		global $wpdb, $mp_core_options, $wp_version;

		//Tell the mp_stacks_options that we just activated a stack pack
		$mp_core_options['parent_plugin_activation_status'] = 'just_activated';

		$mp_core_options['mp_stacks_theme_bundle_being_installed'] = array(
			'theme_bundle_slug' => $this->_theme_bundle_info['slug'],
			'fancy_title' => $this->_theme_bundle_info['fancy_name'],
			'support_url' => 'https://mintplugins.com/support/',
			'support_email' => 'support@mintplugins.com',
			'required_theme_dirname' => $this->_theme_bundle_info['child_theme_directory_name'],
			'plugin_api_url' => $this->_theme_bundle_info['plugin_api_url']
		);

		//Save our mp_stacks_options - since we've just activated and changed some of them
		update_option( 'mp_core_options', $mp_core_options );

		//Make it so that the license validity is set to false so that it re-checks. This makes for a much smoother experience if the license is expired but bundle is re-installed.
		update_option( $this->_theme_bundle_info['dashed_slug'] . '_license_status_valid', false );

		$active_theme = wp_get_theme();

		//Atempt to activate the theme now. This covers an off-scenario where the theme is installed but not active.
		switch_theme( $mp_core_options['mp_stacks_theme_bundle_being_installed']['required_theme_dirname'] );

		//Set up the auto redirects to install dependant plugins
		new MP_CORE_Licensed_Parent_Plugin_Installation_Routine( $mp_core_options['mp_stacks_theme_bundle_being_installed'] );

	}

	/**
	 * Init doesn't fire on activation hooks - but we need this class to run in both cases so we re-hook it here.
	 *
	 * @since 1.0
	 * @param void
	 * @return void
	 */
	public function theme_bundle_admin_init(){

		//Set up the auto redirects to install dependant plugins
		global $mp_core_options;

		//Initialize the MP_CORE_Licensed_Parent_Plugin_Installation_Routine Class.
		if ( isset( $mp_core_options['mp_stacks_theme_bundle_being_installed'] ) ){
			new MP_CORE_Licensed_Parent_Plugin_Installation_Routine( $mp_core_options['mp_stacks_theme_bundle_being_installed'] );
		}

	}

	/**
	 * This theme bundle requires additional setup for default items like Stacks, Pages, Posts etc.
	 * Therefore, tell mp_core_options that we are at this step once all required plugins are activated.
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/
	 * @see      function_name()
	 * @param    array $mp_core_options
	 * @return   array $mp_core_options
	 */
	public function theme_bundle_initialize_default_items_setup( $mp_core_options, $theme_bundle_slug ){

		if ( $theme_bundle_slug == $this->_theme_bundle_info['slug'] ){
			//Tell mp_core_options that some default items need to now be set up since all needed plugins are activated.
			$mp_core_options['setup_default_' . $theme_bundle_slug . '_items'] = true;
		}

		return $mp_core_options;
	}

	/**
	 * Returns the array of the custom theme mods for this theme. As a developer, you can get this array under "Appearance" > "Export Customizer" with the MP Stacks + Developer Add-On.
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/
	 * @see      function_name()
	 * @param    void
	 * @return   array
	 */
	public function theme_bundle_theme_mods(){

		return $this->_theme_bundle_info['theme_mods'];

	}

	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/set_up_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function set_up_default_stacks( $default_stacks_to_create ){

		return $this->_theme_bundle_info['stack_templates'];

	}

	/**
	 * This is a bit of a workaround - but it does work. The problem: When installing the theme upon activation, the "switch_theme" function
	 * is used. Thats great. EXCEPT the theme's code is NOT really active until the page is reloaded. So when we do a check for function_exists
	 * for the theme's textdomain function, it doesn't exist and we get redirected to the plugin/theme installation page. However,
	 * because the theme's textdomain function actually DOES exist now (because the page has been reloaded), there is no need for
	 * the plugin/theme installation page to exist and WordPress shows us a "This page doesn't exist" error. So, we know that if we
	 * get to the error page and our theme is correct for this theme bundle, we know that the theme actually DOES exist and just
	 * needs a page refresh to really activate. So here, we hook into that error page wordpress shows us to check if the current
	 * theme is the one we're looking for. If it is, we redirect to admin and all is well again in the world. WHEW! We got there.
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/
	 * @see      function_name()
	 * @param    void
	 * @return   void
	 */
	function theme_bundle_switch_theme_workaround(){

		//Get the current URL
		$current_url = mp_core_get_current_url();

		//Get the current Theme
		$current_theme = wp_get_theme();
		$current_theme_name = $current_theme->get( 'Name' );
		$fancy_theme_name = $this->_theme_bundle_info['child_theme_fancy_name'];

		//If the current theme is the one we want for this theme bundle
		if ( $fancy_theme_name == $current_theme_name && strpos( $current_url, 'mp_core_install_plugins_page' ) !== false ){

			//Send us back to the admin and away from this error page - before the error page has a chance to show it's ugly face.
			wp_redirect( admin_url() );
			exit;
		}
	}

	/**
	 * Here we kill EDD's Welcome redirect if we are in the midst of installing our dependant plugins for a theme bundle.
	 *
	 * @since 1.0
	 * @param void
	 * @return void
	 */
	function theme_bundle_kill_edd_welcome(){

		global $mp_core_options;

		if( isset( $mp_core_options['parent_plugin_activation_status'] ) ){
			set_transient( '_edd_activation_redirect', false, 30 );
		}

	}

	/**
	 * Check for updates for the Restore Church Theme Bundle Plugin by creating a new instance of the MP_CORE_Plugin_Updater class.
	 *
	 * @access   public
	 * @since    1.0.0
	 * @return   void
	 */
	public function theme_bundle_update() {

		$args = array(
			'software_name' => $this->_theme_bundle_info['fancy_name'], //<- The exact name of this Plugin.
			'software_api_url' => $this->_theme_bundle_info['plugin_api_url'],//The URL where Sample Template and mp_repo are installed and checked
			'software_filename' => $this->_theme_bundle_info['plugin_filename'],
			'software_licensed' => $this->_theme_bundle_info['licensed'], //<-Boolean
		);

		//Since this is a plugin, call the Plugin Updater class
		$restore_church_theme_bundle_plugin_updater = new MP_CORE_Plugin_Updater($args);
	}

}

/**
 * Return the one true theme bundle object
 *
 * @access   public
 * @since    1.0.0
 * @return   void
 */
function growing_church_theme_bundle_function(){

	// Declare the global variable
	global $growing_church_theme_bundle_global_var;

	// Check if that global variable is already instantiated
	if ( $growing_church_theme_bundle_global_var instanceof GrowingChurchThemeBundle ){
		// If it has, return it rather than running through the entire object set-up again
		return $growing_church_theme_bundle_global_var;
	}

	// If we got this far, this All Access Pass has not been created on this page load yet. Lets instantiate it and store it in the global.
	$growing_church_theme_bundle_global_var = new GrowingChurchThemeBundle();

	return $growing_church_theme_bundle_global_var;
}
growing_church_theme_bundle_function();

/**
 * Check for the existence of the Theme Bundle's dependencies
 *
 * @since    1.0.0
 * @return   array
 */
function growing_church_theme_bundle_dependencies(){
	return growing_church_theme_bundle_function()->theme_bundle_dependencies();
}
