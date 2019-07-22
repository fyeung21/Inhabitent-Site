<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="product-grid">

        <div class="product-grid-item">

            <div class="product-grid-image">
                <a href="<?php get_permalink(); ?>"><!--- image --></a>
            </div>

            <header class="entry-header">
                <!-- <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?> -->

                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                <?php if ('post' === get_post_type()) : ?>
                    <div class="entry-meta">
                        <p><!-- add price --></p>
                    </div>
                <?php endif; ?>
            </header>

            <div class="entry-content">
            </div>

        </div>

    </div>
</article><!-- #post-## -->