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
	wp_enqueue_style('wcm20-oneliner-styles', WCMOL_PLUGIN_URL . "assets/css/wcm20-oneliner.css", [], "0.1", "screen");
}
add_action('wp_enqueue_scripts', 'wcmol_enqueue_styles');
