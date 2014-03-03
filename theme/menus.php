<?php

/**
 * Menus
 */

// usage: wp_nav_menu(array('id' => 'primary'));
register_nav_menus(array(
	'primary' => _('Primary Menu'),
	'footer' => _('Footer Menu')
));
