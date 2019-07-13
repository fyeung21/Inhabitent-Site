<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

        <?php  $args = array(
                'order' => 'ASC',
                'posts_per_page' => 10,
                'post_type' => 'products',
             ); ?>
        <?php $journal_posts = new WP_Query( $args ); ?>   

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>