<?php

/**
 * Include widget class(es)
 */
require(WCMOL_PLUGIN_DIR . 'includes/class.OnelinerWidget.php');

/**
 * Register widget(s)
 */
function wcmol_widgets_init() {
	register_widget('OnelinerWidget');
}
add_action('widgets_init', 'wcmol_widgets_init');
