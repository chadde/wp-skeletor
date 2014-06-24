<?php
/**
 * Theme Enqueue
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 */

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
 * @example wp_enqueue_script( $handle => string, $src => string, $deps => array(), $ver => string, $in_footer => bool );
 */

function skel_etor_enqueue_scripts() {
	if ( ! is_admin() ) {
		wp_enqueue_script('modernizr', get_template_directory_uri().'/js/libs/modernizr-2.6.2.min.js');
		wp_enqueue_script('chromeframe', '//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js');
		wp_enqueue_script('respond', get_template_directory_uri().'/js/min/respond.min.js', array(), '1.0', true);
		wp_enqueue_script('plugins', get_template_directory_uri().'/js/min/plugins.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script('script', get_template_directory_uri().'/js/min/script.min.js', array('jquery', 'plugins'), '1.0', true);
	}
}

/**
 * External resoruces
 */

function skel_etor_cdn_resources() {

	if ( ! is_admin() ) {

		/**
		 * Flexslider
		 *
		 * @link http://cdnjs.com/libraries/flexslider
		 */
		if ( SKEL_ETOR_FLEXSLIDER ) {
			wp_enqueue_style('flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css');
			wp_enqueue_script('flexslider', '//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js', array(), '1.0', true);
		}

		/**
		 * FontAwesome
		 *
		 * @link http://fontawesome.io/
		 */
		if ( SKEL_ETOR_FONTAWESOME ) {
			wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
		}

		/**
		 * Google Fonts
		 */
		wp_enqueue_style( 'skel-etor-google-font', '//fonts.googleapis.com/css?family=Karla', array(), '1.0' );

	}
}