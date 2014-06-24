<?php
/**
 * Theme Functions
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 *
 * Functions defined here are attached to @see hooks.php
 * No add_action's should be called here
 *
 * @see theme/hooks.php
 */

/**
 * SKEL-ETOR Share
 */
function skel_etor_share() {
	ob_start(); ?>
	<div class="share">
		<p>SHARE HTML</p>
	</div>
	<?php $html = ob_get_clean();
	echo $html;
}

/**
 * Google Maps API
 *
 * Use conditional loading to limit API calls
 */
function skel_etor_google_maps_api() {
	// Update condition
	if ( get_post_type() == 'gmaps_post_type_condition' ) {
		wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
	}
}