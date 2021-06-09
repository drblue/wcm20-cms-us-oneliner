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

/**
 * Respond to incoming AJAX-request for action 'wcmol_get_oneliner'
 *
 * wp_ajax_{action}         // if user is logged in
 * wp_ajax_nopriv_{action}  // if user is NOT logged in
 *
 * @return void
 */
function wcmol_ajax_get_oneliner() {
	$oneliners = [
		"Light travels faster than sound. This is why some people appear bright until they open their mouths.", // 0
		"I always take life with a grain of salt. Plus, a slice of lemon. And a shot of tequila.", // 1
		"That's odd.", // 2
	];

	$i = array_rand($oneliners); // get random index from array
	$oneliner = $oneliners[$i];  // get item at index from array

	sleep(3);

	wp_send_json([
		'oneliner' => $oneliner,
	]);
}
add_action('wp_ajax_wcmol_get_oneliner', 'wcmol_ajax_get_oneliner');
add_action('wp_ajax_nopriv_wcmol_get_oneliner', 'wcmol_ajax_get_oneliner');
