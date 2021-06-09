<?php
/**
 * Plugin Name:	WCM20 Oneliner
 * Description:	This plugin adds a widget for displaying random (hopefully) funny oneliners
 * Version:		0.1
 * Author:		Johan Nordström
 * Author URI:	https://www.thehiveresistance.com
 * Text Domain:	wcmol
 * Domain Path:	/languages
 */

define('WCMOL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WCMOL_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Include dependencies.
 */
require_once(WCMOL_PLUGIN_DIR . 'includes/functions.php');
require_once(WCMOL_PLUGIN_DIR . 'includes/widgets.php');
