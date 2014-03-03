<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 */
?>

	<footer id="footer">
		<?php if (has_nav_menu('footer')) : ?>
			<div id="nav-footer" class="nav">
				<?php wp_nav_menu(array('theme_location' => 'footer')); ?>
			</div>
		<?php endif; ?>
	</footer>

</div><!-- .container -->
<?php wp_footer(); ?>
</body>
</html>