<?php
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="taxonomy-description">', '</div>');
				?>
			</header>

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
				get_template_part('template-parts/content', 'product');
				?>

			<?php endwhile; ?>

			<!-- why return an error on footer when deleting this? -->

			<!-- <?php else : ?>

				<?php get_template_part('template-parts/content', 'product'); ?>

				<?php endif; ?> -->

			<!---- #end --->

		<?php $args = array(
			'order' => 'DESC',
			'posts_per_page' => 10,
			'post_type' => 'products',
		); ?>
		<?php $product_posts = new WP_Query($args); ?>

		<?php if ($product_posts->have_posts()) : ?>

			<?php while ($product_posts->have_posts()) : $product_posts->the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php get_template_part('template-parts/content', 'single-product'); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<h2>Cannot Find Recent Posts</h2>

		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	</main>
</div>

<?php get_footer(); ?>