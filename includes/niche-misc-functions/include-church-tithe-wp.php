<?php
/**
 * This file contains the function which optionally make installing Church Tithe WP simple for Church Niche Bundles.
 *
 * @since 1.0.0
 *
 * @package    MP Stacks SermonGrid
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */

// Churchtithewp is not a required plugin. Rather, it only install upon activation.
if ( ! function_exists( 'churchtithewp_theme_bundle_install' ) ) {
	function churchtithewp_theme_bundle_install() {
		mp_install_plugin_from_wp_org( 'churchtithewp', 'churchtithewp', 'church-tithe-wp.php' );
	}
	add_action( 'mp_theme_bundle_activated', 'churchtithewp_theme_bundle_install' );
}

if ( ! function_exists( 'mp_install_plugin_from_wp_org' ) ) {
	function mp_install_plugin_from_wp_org( $plugin_slug, $plugin_dir_name, $plugin_file_name ) {
		/** If plugins_api isn't available, load the file that holds the function */
		if ( ! function_exists( 'plugins_api' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
		}

		// Get the SendGrid information from the WordPress Repo.
		$args = array( 'slug' => $plugin_slug );
		$api  = plugins_api( 'plugin_information', $args );

		// Get credentials for wp filesystem.
		$url   = wp_nonce_url( 'options-general.php' );
		$creds = request_filesystem_credentials( $url, '', false, false );
		if ( false === $creds ) {
			return wp_json_encode(
				array(
					'success'    => false,
					'error_code' => 'filesystem_failed',
				)
			);

		}

		// Now we have some credentials, try to get the wp_filesystem running.
		if ( ! WP_Filesystem( $creds ) ) {
			return wp_json_encode(
				array(
					'success'    => false,
					'error_code' => 'filesystem_failed',
				)
			);

		}

		// By this point, the $wp_filesystem global should be working, so let's use it get our plugin.
		global $wp_filesystem;

		// Get the plugins directory and name the temp plugin file.
		$upload_dir = $wp_filesystem->wp_plugins_dir();
		$filename   = trailingslashit( $upload_dir ) . 'temp.zip';

		// If 'allow_url_fopen' is available, do it the right way using the WP Filesystem api.
		if ( ini_get( 'allow_url_fopen' ) ) {

			// Download the plugin file defined in the passed in array.
			$saved_file = $wp_filesystem->get_contents( esc_url_raw( add_query_arg( array( 'site_activating' => get_bloginfo( 'wpurl' ) ), $api->download_link ) ) );

			// If the file the came back was blank, try getting it another way.
			if ( empty( $saved_file ) ) {
				$saved_file = wp_remote_retrieve_body( wp_remote_get( esc_url_raw( add_query_arg( array( 'site_activating' => get_bloginfo( 'wpurl' ) ), $api->download_link ) ) ) );
			}

			// If the file still came back empty, try without using SSL.
			if ( empty( $saved_file ) ) {
				$plugin_download_link = str_replace( 'https', 'http', $api->download_link );
				$saved_file           = wp_remote_retrieve_body( wp_remote_get( esc_url_raw( add_query_arg( array( 'site_activating' => get_bloginfo( 'wpurl' ) ), $plugin_download_link ) ) ) );

				return wp_json_encode(
					array(
						'success'    => false,
						'error_code' => 'ssl_connections_not allowed',
					)
				);

			}

			// If it's still empty.
			if ( empty( $saved_file ) ) {
				return wp_json_encode(
					array(
						'success'    => false,
						'error_code' => 'unable_to_download_zip',
					)
				);

			}

			// Save the contents into a temp.zip file (string stored in $filename).
			if ( ! $wp_filesystem->put_contents( $filename, $saved_file, FS_CHMOD_FILE ) ) {
				return wp_json_encode(
					array(
						'success'    => false,
						'error_code' => 'unable_to_create_zip',
					)
				);

			}
			// For people with poor/bad server configurations which don't have access to allow_url_fopen, try using curl.
		} else {

			// Initializing curl.
			$ch = curl_init(); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_init

			// Return Transfer.
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_setopt

			// File to fetch.
			curl_setopt( $ch, CURLOPT_URL, $api->download_link ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_setopt

			// Open/Create new file.
			$file = fopen( $upload_dir . 'temp.zip', 'w' ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_read_fopen

			// Put contents of plugin_download_link in this new file.
			curl_setopt( $ch, CURLOPT_FILE, $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_setopt

			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_setopt

			// Set User Agent.
			curl_setopt( $ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5' ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_setopt

			// Getting results.
			$result = curl_exec( $ch ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_exec

			curl_close( $ch ); // phpcs:ignore WordPress.WP.AlternativeFunctions.curl_curl_close

			fclose( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_system_read_fclose

			// If we are unable to find the file, let the user know.
			if ( ! $result ) {
				return wp_json_encode(
					array(
						'success'    => false,
						'error_code' => 'unable_to_locate_file',
					)
				);

			}
		}

		// Unzip the temp zip file.
		$unzip_result = unzip_file( $filename, trailingslashit( $upload_dir ) . '/' );

		// If there was a problem unzipping the file.
		if ( is_wp_error( $unzip_result ) ) {

			$zip = new ZipArchive();
			if ( $zip->open( $filename ) === true ) {
				$zip->extractTo( trailingslashit( $upload_dir ) );
				$zip->close();
			} else {
				return wp_json_encode(
					array(
						'success'    => false,
						'error_code' => 'webhost_has_improper_temp_dir',
					)
				);

			}
		}

		// Delete the temp zipped file.
		$wp_filesystem->rmdir( $filename );

		// Set plugin cache to NULL so activate_plugin->validate_plugin->get_plugins will check again for new plugins.
		wp_cache_set( 'plugins', null, 'plugins' );

		// Activate plugin.
		$result = activate_plugin( trailingslashit( $upload_dir ) . $plugin_dir_name . '/' . $plugin_file_name );

		// If there was a problem activating the plugin.
		if ( is_wp_error( $result ) ) {
			return wp_json_encode(
				array(
					'success'    => false,
					'error_code' => $result->get_error_code(),
				)
			);

		}

		// If we activated the plugin and it's all good.
		return wp_json_encode(
			array(
				'success' => true,
			)
		);

	}
}

if ( ! function_exists( 'churchtithewp_theme_bundle_dashboard_widget' ) ) {
	function churchtithewp_theme_bundle_dashboard_widget( $initial_theme_bundle_version ){
		global $mp_theme_bundle_slug;

		// Don't show any dashboard widget if CTWP is active.
		if ( is_plugin_active( 'churchtithewp/church-tithe-wp.php' ) ) {
			return;
		}

		// Check if the user has dismissed this notice.
		$ctwp_dashboard_dismissed = get_option( 'ctwp_dashboard_dismissed' );

		if ( $ctwp_dashboard_dismissed ) {
			return;
		}

		wp_add_dashboard_widget(
			'churchtithewp_dashboard_widget', // Widget slug.
			__( 'Mint Themes News: Accept online donations using ChurchTitheWP', 'theme_bundle_template' ), // Title.
			'churchtithewp_dashboard_widget_output' // Display function.
		);

	}
}
add_action( 'wp_dashboard_setup', 'churchtithewp_theme_bundle_dashboard_widget' );

if ( ! function_exists( 'churchtithewp_dashboard_widget_output' ) ) {
	function churchtithewp_dashboard_widget_output() {

		$nonce = wp_nonce_url( self_admin_url( 'update.php?churchtithewp_install_for_theme_bundle' ) );

		// Display whatever it is you want to show.
		echo wp_kses_post( '<p>' . sprintf( __( 'If you would like to accept tithes on your Church website, check out our new (and free) ChurchTitheWP plugin, powered by Stripe. %1$s or %2$s.', 'theme_bundle_template' ), '<a href="https://churchtithewp.com">' . __( 'Learn more', 'theme_bundle_template' ) . '</a>', '<a href="' . $nonce . '">' . __( 'Install now', 'theme_bundle_template' ) . '</a>' ) . '</p>' );
		echo wp_kses_post( '<p>' . sprintf( __( 'Alternatively, if you already have a tithing solution, or simply aren\'t interested, you can %s.', 'theme_bundle_template' ), '<a href="' . wp_nonce_url( admin_url( '?ctwp_dashboard_dismiss' ), 'ctwp_dashboard_dismiss_notice', 'ctwp_dashboard_dismiss_notice_nonce' ) . '">' . __( 'dismiss this notice', 'theme_bundle_template' ) . '</a>' ) . '</p>' );
	}
}

if ( ! function_exists( 'churchtithewp_install_endpoint' ) ) {
	function churchtithewp_install_endpoint() {

		if ( ! isset( $_GET['churchtithewp_install_for_theme_bundle'] ) ) {
			return false;
		}

		if ( ! isset( $_GET['_wpnonce'] ) ) {
			return false;
		}

		// Sanitize the nonce vars.
		$nonce_value = sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) );

		// Verify the nonce.
		if ( ! wp_verify_nonce( $nonce_value ) ) {
			return false;
		}

		if ( ! current_user_can( 'install_plugins' ) ) {
			return false;
		}

		mp_install_plugin_from_wp_org( 'churchtithewp', 'churchtithewp', 'church-tithe-wp.php' );

		wp_safe_redirect( admin_url( 'admin.php?page=church-tithe-wp&mpwpadmin1=welcome&mpwpadmin_lightbox=do_wizard_health_check' ) );

		die();
	}
}
add_action( 'admin_init', 'churchtithewp_install_endpoint' );

if ( ! function_exists( 'churchtithewp_theme_bundle_handle_dismiss_notice' ) ) {
	function churchtithewp_theme_bundle_handle_dismiss_notice() {

		if ( ! isset( $_GET['ctwp_dashboard_dismiss'] ) || ! isset( $_GET['ctwp_dashboard_dismiss_notice_nonce'] ) ) {
			return false;
		}

		$nonce = sanitize_text_field( wp_unslash( $_GET['ctwp_dashboard_dismiss_notice_nonce'] ) );

		if ( ! wp_verify_nonce( $nonce, 'ctwp_dashboard_dismiss_notice' ) ) {
			return false;
		}

		update_option( 'ctwp_dashboard_dismissed', true );

	}
}
add_action( 'admin_init', 'churchtithewp_theme_bundle_handle_dismiss_notice' );
