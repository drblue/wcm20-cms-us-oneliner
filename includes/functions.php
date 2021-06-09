<?php

if (!function_exists('pre')) {
	/**
	 * Print human-readable information about a variable, wrapped in HTML `<pre>`-tags.
	 *
	 * @param mixed $obj
	 * @return string
	 */
	function pre($obj) {
		return sprintf("<pre>%s</pre>", print_r($obj, true));
	}
}

/**
 * Enqueue scripts and styles
 *
 * @return void
 */
function wcmol_enqueue_styles() {
	// styles
	wp_enqueue_style('wcm20-oneliner-styles', WCMOL_PLUGIN_URL . "assets/css/wcm20-oneliner.css", [], "0.1", "screen");

	// scripts
	wp_enqueue_script('wcm20-oneliner-js', WCMOL_PLUGIN_URL . "assets/js/wcm20-oneliner.js", [], "0.1", true);
	wp_localize_script('wcm20-oneliner-js', 'wcmol_settings', [
		'ajax_url' => admin_url('admin-ajax.php'),
	]);
}
add_action('wp_enqueue_scripts', 'wcmol_enqueue_styles');
