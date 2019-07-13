<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php  $args = array(
                'order' => 'ASC',
                'posts_per_page' => 4,
                'post_type' => 'product',
             ); ?>
        <?php $product_posts = new WP_Query( $args ); ?>   

        <?php if ($product_posts->have_posts()) : ?>

             <?php while ($product_posts->have_posts() ) : $product_posts->the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <?php the_post_thumbnail(); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

            <?php else: ?>

                <h2>Cannot Find Recent Posts</h2>

            <?php endif; ?>
        <?php wp_reset_postdata(); ?>

		</main>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>