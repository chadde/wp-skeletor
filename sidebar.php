<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 */
?>

<div id="sidebar">
	<div class="inner">
	<?php
	if ( is_home() ) {
		dynamic_sidebar('home-sidebar');
	} else {
		dynamic_sidebar('main-sidebar');
	}
	?>
	</div>
</div>