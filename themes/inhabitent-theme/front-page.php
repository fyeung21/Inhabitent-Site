<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

            <?php  $args = array(
                'order' => 'ASC',
                'posts_per_page' => 4,
                'post_type' => 'post',
             ); ?>
        <?php $journal_posts = new WP_Query( $args ); ?>   

        <?php if ($journal_posts->have_posts()) : ?>

             <?php while ($journal_posts->have_posts() ) : $journal_posts->the_post(); ?>

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

<?php get_footer(); ?>