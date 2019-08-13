<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main post-type-archive" role="main">

        <header class="page-header">
            <?php
            echo '<h1 class="page-title">' . single_term_title('', false) . '</h1>';
            the_archive_description('<div class="type-description"><p>', '<p></div>');
            ?>
        </header>

        <?php $args = array(
            'post_type' => 'product',
            'order' => 'ASC',
            'posts_per_page' => '16',
        ); ?>
        <?php $product_posts = new WP_Query($args); ?>

        <?php if ($product_posts->have_posts()) : ?>

            <div class="product-grid">

                <?php while (have_posts()) : the_post(); ?>

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