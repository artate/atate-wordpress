<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


	<?php endwhile; ?>

	<?php else: ?>


	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
