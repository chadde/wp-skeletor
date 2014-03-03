<?php

/**
 * Debugging Helpers
 */

$debug = false;

// readable error output/debugging
if ( ! function_exists('ppr') AND ! function_exists('ppro')) {
	function ppr($v) {
		echo '<pre>'.htmlentities(print_r($v,true)).'</pre>';
	}
	function ppro($v) {
		echo '<div class="debug"><pre>'.htmlentities(print_r($v,true)).'</pre></div>';
	}
}

/*
 * Function backtrace
 *
 * Accepts a short message to flag bug inline in template
 * E.g: dbug('HTML block is missing from here');
 */
if ( ! function_exists('dbug')) {
	function dbug($msg = '') {
		$bt = debug_backtrace();
		$caller = array_shift($bt);

		if( $msg != '') :
			$debug_info = '<div class="debug"><pre>'.$msg.'<br><span>'.$caller['file'].'<br>Line# '.$caller['line'].'<span></pre></div>';
		else :
			$debug_info = '<div class="debug"><pre><span>'.$caller['file'].'<br>Line# '.$caller['line'].'<span></pre></div>';
		endif;

		echo $debug_info;
	}
}

/**
 * Template debugging information
 *
 * Displays when $debug = true, @see debug.php #7
 * Temporary usage: http://domain.com/?debug=1
 */
if ( isset($_GET['debug']) || $debug == true) {
	/**
	 * The Query WP is trying to fetch
	 */
	add_action('loop_start', 'wp_fetching');
	function wp_fetching() {
		global $wp;
		echo '<pre>';
		echo "REQUEST: ".$wp->request."<br />";
		echo "MATCHED_RULE: ".$wp->matched_rule."<br />";
		echo "MATCHED_QUERY: ".$wp->matched_query."<br />";
		echo '</pre>';
	}
	/**
	 * The template filename WordPress is currently using to display content
	 *
	 * Only show's top level templates, i.e. will not show get_template_part()'s'
	 */
	add_action('loop_start', 'show_template');
	function show_template() {
		global $template;
		echo '<pre>CURRENT TEMPLATE: '.basename($template).'</pre>';
	}
}
