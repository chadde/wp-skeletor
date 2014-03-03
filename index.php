<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 */

get_header(); ?>

<div id="main">
	<div id="content">

		<?php while( have_posts() ) : the_post(); ?>

			<article id="post-<?php echo get_the_ID(); ?>" class="post-type-<?php echo get_post_type(); ?>">
				<header>
					<h1><?php the_title(); ?></h1>
					<span class="meta">
						<span class="date"><?php the_time(); ?></span>
					</span>
				</header>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php the_tags(); ?>
				</footer>
			</article>

		<?php endwhile; ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>