<?php
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<header class="page-header">
			<?php echo '<h1 class="page-title">' . post_type_archive_title('', false) . '</h1>'; ?>

			<?php $terms = get_terms(array(
				'taxonomy' => 'product_type',
				'hide_empty' => false,
			)); ?>

			<?php if (!empty($terms) && !is_wp_error($terms)) {
				echo '<ul class="term-links">';
				foreach ($terms as $term) {
					echo '<li><a href="' . esc_url(get_term_link($term)) . '" alt="' . esc_attr(sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name)) . '">' . $term->name . '</a></li>';
				}
				echo '</ul>';
			} ?>
		</header>

		<?php $args = array(
			'order' => 'ASC',
			'post_type' => 'product',
		); ?>
		<?php $product_posts = new WP_Query($args); ?>

		<?php if ($product_posts->have_posts()) : ?>
			<div class="product-grid">

				<?php while ($product_posts->have_posts()) : $product_posts->the_post(); ?>

					<?php get_template_part('template-parts/content', 'product'); ?>

				<?php endwhile; ?>
			</div>

		<?php else : ?>

			<h2>Cannot Find Recent Posts</h2>

		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	</main>
</div>

<?php get_footer(); ?>