<?php
/**
 * This file contains the functions needed to properly install the Theme Bundle.
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package    Theme Bundle
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Mint Plugins
 */

/**
 * Set up the global $mp_core_options
 *
 * @since 1.0
 * @global $wpdb
 * @global $mp_core_options
 * @return void
 */
if ( !function_exists( 'mp_core_global_options_init' ) ){
	function mp_core_global_options_init(){

		global $mp_core_options;

		$mp_core_options = get_option('mp_core_options');

		if( !session_id() ){
			session_start();
		}

	}
}

//Set up our Global Options for MP Stacks
mp_core_global_options_init();

/**
 * When the theme bundle get activated as a theme, copy the code to the plugins directory.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    array $args See link for description.
 * @return   void
 */
function mp_theme_bundle_theme_activation_one() {

	global $mp_core_options;

	$mp_core_options['mp_theme_bundle_activation_set_up_plugin'] = true;

	update_option( 'mp_core_options', $mp_core_options );

}
add_action('after_switch_theme', 'mp_theme_bundle_theme_activation_one');

/**
 * Once this theme is activated, this function will run because of
 * the "mp_theme_bundle_activation_set_up_plugin" variable set in the "mp_theme_bundle_theme_activation_one" function.
 * The reason we wait until now to do these installation functions is
 * because the WP_Filesystem needs to be called after the admin_init hook - and the "after_switch_theme" is prior to "admin_init".
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    array $args See link for description.
 * @return   void
 */
function mp_theme_bundle_activation_set_up_plugin(){

	global $mp_core_options;

	if ( !isset( $mp_core_options['mp_theme_bundle_activation_set_up_plugin'] ) ){
		return;
	}

	if ( !$mp_core_options['mp_theme_bundle_activation_set_up_plugin'] ){
		return;
	}

	$theme_bundle_info = mp_get_theme_bundle_info();

	//Set the method for the wp filesystem
	$method = ''; // Normally you leave this an empty string and it figures it out by itself, but you can override the filesystem method here

	//Get credentials for wp filesystem
	if (false === ($creds = request_filesystem_credentials( admin_url(), $method, false, false) ) ) {

		// if we get here, then we don't have credentials yet,
		// but have just produced a form for the user to fill in,
		// so stop processing for now

		return true; // stop the normal page form from displaying
	}

	//Now we have some credentials, try to get the wp_filesystem running
	if ( ! WP_Filesystem($creds) ) {
		// our credentials were no good, ask the user for them again
		request_filesystem_credentials($url, $method, true, false);
		return true;
	}

	//By this point, the $wp_filesystem global should be working, so let's use it get our plugin.
	global $wp_filesystem;

	$plugins_dir = $wp_filesystem->wp_plugins_dir();

	// Zip file name
	$zip_file_name = $theme_bundle_info['dashed_slug'] . '.zip';

	$plugin_file_name = $plugins_dir . '/' . $theme_bundle_info['dashed_slug'] . '/' . $theme_bundle_info['plugin_filename'];

	//If this corresponding Theme Bundle plugin is already active, de-activate it now:
	deactivate_plugins( $plugin_file_name );

	//Create a zip containing this "theme" in the plugins directory
	mp_core_zip_directory( realpath( get_template_directory() ), $plugins_dir . '/' . $zip_file_name );

	//Unzip it
	$unzip_result = unzip_file( $plugins_dir . '/' . $zip_file_name, $plugins_dir . '/' );

	//Delete the temp zipped file
	$wp_filesystem->rmdir( $plugins_dir . '/' . $zip_file_name );

	//Now that the plugin is where it needs to be, activate it.
	activate_plugin( $plugin_file_name );

	unset( $mp_core_options['mp_theme_bundle_activation_set_up_plugin'] );
	update_option( 'mp_core_options', $mp_core_options );

	echo '<style type="text/css">';

		echo '#mp_theme_bundle_installation_overlay{

			top:0px;
			right:0px;
			bottom:0px;
			left:0px;
			position:absolute;
			width:100%;
			background-color: #222222;
            z-index: 999999999999;
			color:#ffffff;
			font-size:30px;

			height: 100%;
			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-box-pack: center;
			  -webkit-justify-content: center;
				  -ms-flex-pack: center;
					  justify-content: center;
			  -webkit-box-align: center;
			  -webkit-align-items: center;
				  -ms-flex-align: center;
					  align-items: center;

		}';

	echo '</style>';

	echo '<div id="mp_theme_bundle_installation_overlay">' . __( 'Starting Activation...', 'mp_core' ) . '</div>';

}
add_action( 'admin_menu', 'mp_theme_bundle_activation_set_up_plugin' );

/**
 * The theme bundle array, containing all data unique to this theme bundle
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    array $args See link for description.
 * @return   array
 */
function mp_get_theme_bundle_info(){

	$path = get_template_directory() . '/theme-bundle.json';

	// We gotta get fancy here to include the json the way we need because some hosts block file opening options
	ob_start();
	include( $path );
	$response = ob_get_clean();

	$theme_bundle = json_decode( $response, true );

	return $theme_bundle;

}

/**
 * Zip a directory and all of its files and subdirectories
 */
if ( !function_exists( 'mp_core_zip_directory' ) ){
	function mp_core_zip_directory($source, $destination){

		global $mp_core_options;

		if ( ! extension_loaded('zip') ) {

			echo __( 'Oops! Your webhost is not properly configured for WordPress. The PHP Zip extension is not installed on this server. Contact your webhost to ask them to install it for you and then retry the installation.', 'mp_core' );

			unset( $mp_core_options['mp_theme_bundle_activation_set_up_plugin'] );
			update_option( 'mp_core_options', $mp_core_options );

			die();
		}

		if ( !file_exists($source) ){
			echo __( 'Oops! Your webhost is not properly configured for WordPress. It looks like the permissions are not set correctly or the plugins directory does not exist. Get in touch with your webhost and ask them to review the permissions settings on your hosting account.', 'mp_core' );

			unset( $mp_core_options['mp_theme_bundle_activation_set_up_plugin'] );
			update_option( 'mp_core_options', $mp_core_options );

			die();
		}

		$zip = new ZipArchive();
		if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
			return false;
		}

		$dirname = explode('/', $destination);
		$dirname = explode('.', end($dirname));
		$dirname = $dirname[0];

		$source = str_replace('\\', '/', realpath($source));

		if (is_dir($source) === true)
		{

			$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

			foreach ($files as $file)
			{
				$file = str_replace('\\', '/', $file);

				// Ignore "." and ".." folders
				if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
					continue;

				$file = realpath($file);

				if (is_dir($file) === true)
				{
					$zip->addEmptyDir(str_replace($source . '/', $dirname . '/', $file . '/'));
				}
				else if (is_file($file) === true)
				{
					$zip->addFromString(str_replace($source . '/', $dirname . '/', $file), file_get_contents($file));
				}
			}
		}
		else if (is_file($source) === true)
		{
			$zip->addFromString(basename($source), file_get_contents($source));
		}

		return $zip->close();
	}
}
