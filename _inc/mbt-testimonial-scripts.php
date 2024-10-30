<?php

function testimonial_script_enqueue(){
	
    wp_enqueue_style('mbttestimonialstyle', MBT_TESTIMONIAL_PLUGIN_URL_PATH.'assets/css/mbt-testimonial-style.css',array(), '1.0.1', 'all');
    wp_enqueue_style('owl-carousel-min-css', MBT_TESTIMONIAL_PLUGIN_URL_PATH.'assets/owl-carousel-style/owl.carousel.min.css',array(), '1.4', 'all');
    wp_enqueue_style('owl-theme-default-css', MBT_TESTIMONIAL_PLUGIN_URL_PATH.'assets/owl-carousel-style/owl.theme.default.min.css',array(), '1.5', 'all');

    wp_enqueue_script('testimonialjs', MBT_TESTIMONIAL_PLUGIN_URL_PATH.'assets/js/mbt-testimonial-js.js',array(), '1.2', 'all');
    wp_enqueue_script('owlcarouseljs', MBT_TESTIMONIAL_PLUGIN_URL_PATH.'assets/owl-carousel-js/owl.carousel.js',array(), '1.3', 'all');
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'testimonial_script_enqueue');