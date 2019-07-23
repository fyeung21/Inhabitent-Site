<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="product-grid-item">

        <div class="product-thumbnail" style="background-image:url(<?php echo CFS()->get('product_featured_image'); ?>)"><a href="<?php get_permalink(); ?>"></a></div>

        <header class="entry-header">
            <div class="entry-title">
                <?php the_title(sprintf('<p><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a>......</p>'); ?>
            </div>
            <div class="product-price">
                <p><?php echo CFS()->get('price'); ?></p>
            </div>
        </header>

    </div>

</article>