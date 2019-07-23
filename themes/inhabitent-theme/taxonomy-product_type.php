<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <header class="page-header">
            <?php
            echo '<h1 class="page-title">' . single_term_title('', false) . '</h1>';
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <p><?php the_title(); ?></p>
                <div class="product-thumbnail" style="background-image:url(<?php echo CFS()->get('product_featured_image'); ?>)"></div>
                <div class="product-price">
                    <p><?php echo CFS()->get('price'); ?></p>
                </div>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <h2>Cannot Find Recent Posts</h2>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>