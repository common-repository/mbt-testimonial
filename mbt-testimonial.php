<?php
/*
 * Plugin Name: MBT Testimonial
 * Plugin URI: hhttp://mbmughal.rf.gd/
 * Description: Best Responsive Testimonials Slider. It is a fully Responsive & mobile friendly WordPress plugin to manage your company Testimonials. You can create unlimited Testimonial Sliders.
 * Author: Mehmood Baig Mughal
 * Version: 1.2.2
 * Author URI: http://mbmughal.rf.gd/
 * License: GPLv2 or later
 * Tag: testimonials slider, testimonial, testimonials,testimonial slide, testimonial showcase, responsive testimonial, testimonial plugin
 * Text Domain: testimonial-slider-showcase
*/
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

define('MBT_TESTIMONIAL_VERSION', '1.2.2' );
define('MBT_TESTIMONIAL_PLUGIN_DIR_PATH',plugin_dir_path(__FILE__));
define('MBT_TESTIMONIAL_ASSETS_DIR', MBT_TESTIMONIAL_PLUGIN_DIR_PATH . 'assets/');
define('MBT_TESTIMONIAL_PLUGIN_URL_PATH',plugin_dir_url(__FILE__));
define('MBT_TESTIMONIAL_ASSETS_URL', MBT_TESTIMONIAL_PLUGIN_URL_PATH . 'assets/');

register_activation_hook( __FILE__, array( 'mbt-testimonial', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'mbt-testimonial', 'plugin_deactivation' ) );

include_once plugin_dir_path(__FILE__).'/_inc/mbt-testimonial-cpt.php';
include_once plugin_dir_path(__FILE__).'/_inc/mbt-testimonial-page.php';
include_once plugin_dir_path(__FILE__).'/_inc/mbt-testimonial-scripts.php';
include_once plugin_dir_path(__FILE__).'/_inc/mbt-testimonial-fields.php';