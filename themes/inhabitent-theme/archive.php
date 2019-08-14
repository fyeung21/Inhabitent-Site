<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header>

			<?php while (have_posts()) : the_post(); ?>

				<div class="post-article">
					<?php get_template_part('template-parts/content');?>
					<p><a class="read-more" href="<?php the_permalink(); ?>">read more →</a></p>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main>
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>