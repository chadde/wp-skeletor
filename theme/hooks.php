<?php
/**
 * Theme Hooks
 *
 * Functions are defined in @see actions.php then attached to an add_action in this file.
 *
 * These add_actions are then executed by WordPress or rendered in their respective do_action call within theme templates
 * For more information: {@link http://codex.wordpress.org/Function_Reference/add_action}
 *
 * @example add_action( $tag, $function_to_add, $priority, $accepted_args );
 */

/*
TABLE OF CONTENTS

THEME
- skel_etor_setup
- skel_etor_enqueue_styles
- skel_etor_enqueue_scripts
- skel_etor_google_font
- google_maps_api
PAGE
- skel_etor_share
POST
- skel_etor_share
*/


if ( ! is_admin() ) { // Actions on the front end

	/**
	 * WORDPRESS
	 */

	// THEME
	add_action('after_setup_theme', 'skel_etor_setup');
	add_action('wp_enqueue_scripts', 'skel_etor_enqueue_styles');
	add_action('wp_enqueue_scripts', 'skel_etor_enqueue_scripts');
	add_action('wp_head','skel_etor_google_font');
	add_action('wp_print_scripts', 'google_maps_api');

	/**
	 * TEMPLATES
	 */

	// PAGE
	add_action('skel_etor_page_footer', 'skel_etor_share');

	// SINGLE
	add_action('skel_etor_post_footer', 'skel_etor_share');

}