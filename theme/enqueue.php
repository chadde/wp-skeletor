<?php
/**
 * Theme styles
 *
 * @example wp_enqueue_style( $handle, $src , $deps, $ver, $in_footer );
 */

function skel_etor_enqueue_styles() {
	// Styles loaded for front end only
	if ( ! is_admin() ) {
		wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	}
}

/**
 * Theme scripts
 *
 * @example wp_enqueue_script( $handle, $src , $deps, $ver, $in_footer );
 */

function skel_etor_enqueue_scripts() {
	// Scripts loaded for front end only
	if ( ! is_admin() ) {
		wp_enqueue_script('modernizr', get_template_directory_uri().'/js/libs/modernizr-2.6.2.min.js');
		wp_enqueue_script('chromeframe', '//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js');
		wp_enqueue_script('respond', get_template_directory_uri().'/js/respond.min.js', '', '1.0', true);
		wp_enqueue_script('plugins', get_template_directory_uri().'/js/min/plugins.min.js', 'jquery', '1.0', true);
		wp_enqueue_script('script', get_template_directory_uri().'/js/min/script.min.js', array('jquery', 'plugins'), '1.0', true);
	}
}

/**
 * External resoruces
 */

/**
 * Flexslider on CDN
 */
function skel_etor_cdn_resources() {
	if (SKEL_ETOR_FLEXSLIDER == 'false') {
		wp_enqueue_style('flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css');
		wp_enqueue_script('flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js', '', '1.0', true);
	}
	// Styles loaded for front end only
	if (SKEL_ETOR_FONTAWESOME == 'false') {
		wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
	}
}

/**
 * Google Maps API
 *
 * With conditional loading to limit API calls
 */
function google_maps_api() {
	// Update condition
	if ( get_post_type() == 'gmaps_post_type_condition' ) {
		wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
	}
}