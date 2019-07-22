<article id="post-<?php the_ID(); ?>" class="product-entry" <?php post_class(); ?>>
    <div class="product-image">
        <!-- fill in! -->

    </div>
    
    <div class="product-description">
        <header class="entry-header">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <div class="price">
                <p>$$
                    <!-- fill in! -->
                </p>
            </div>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php red_starter_entry_footer(); ?>

            <div class="social-media-btn">
                <a href=#><span><i class="fa fa-facebook" aria-hidden="true"></i></span>like</a>
                <a href=#><span><i class="fa fa-twitter" aria-hidden="true"></i></span>tweet</a>
                <a href=#><span><i class="fa fa-pinterest" aria-hidden="true"></i></span>pin</a>
            </div>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->