<?php
/**
 * The post template
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 */
?>

<article id="post-<?php echo get_the_ID(); ?>" class="post-type-<?php echo get_post_type(); ?>">
	<header>
		<h1><?php the_title(); ?></h1>
		<span class="meta">
			<span class="date"><?php the_time(''); ?></span>
			<span class="tags"><?php the_tags(); ?></span>
		</span>
	</header>
	<div class="entry">
		<?php the_content(); ?>
	</div>
	<footer>
		<?php do_action('skel_etor_post_footer'); ?>
	</footer>
</article>