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
	<?php if ( is_home() ) : ?>
		<?php dynamic_sidebar('home-sidebar'); ?>
	<?php else : ?>
		<?php dynamic_sidebar('main-sidebar'); ?>
	<?php endif; ?>
</div>