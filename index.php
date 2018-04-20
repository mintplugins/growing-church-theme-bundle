<?php

if ( ! extension_loaded('zip') ) {

	echo __( 'Oops! Your webhost is not properly configured for WordPress. The PHP Zip extension is not installed on this server. Contact your webhost to ask them to install it for you and then retry the installation. If you host with Godaddy, we have a guide for how to fix this yourself', 'mp_core' ) . ' <a href="https://mintplugins.com/support/installation-issue-the-php-zip-extension-is-not-installed-on-this-server/" target="_blank">' . __( 'here', 'mp_core' ) . '</a>';

} else{
	echo 'Oops! Somethnig went wrong during the installation. Please deactivate the theme and re-activate it to re-try.';
}
