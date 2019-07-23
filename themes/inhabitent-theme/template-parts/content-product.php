<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="product-grid-item">

            <div class="product-grid-image">
            <div class="product-thumbnail" style="background-image:url(<?php echo CFS()->get('product_featured_image'); ?>)"></div>
            </div>
            <div class="product-price">
                    <p><?php echo CFS()->get('price'); ?></p>
                </div>

            <header class="entry-header">
                
                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

            </header>

            <div class="entry-content">
            </div>

        </div>

</article><!-- #post-## -->