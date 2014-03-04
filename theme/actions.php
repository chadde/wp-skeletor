<?php
/**
 * Theme Actions
 *
 * Functions defined here are attached to @see hooks.php
 * No add_action's should be called here
 *
 * @see theme/hooks.php
 */

/**
 * Google Webfont
 *
 * font-family: 'Karla', sans-serif;
 */
function skel_etor_google_font() {
	ob_start();

	?>
	<script type="text/javascript">
	WebFontConfig = {
		google: { families: [ 'Karla:latin', 'Roboto:900:latin' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})();
	</script>
	<?php

	$html = ob_get_clean();
	echo $html;
}

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