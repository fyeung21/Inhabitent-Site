<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="product-single-page">
        <div class="product-image" style="background-image:url(<?php echo CFS()->get('product_featured_image'); ?>)"></div>

        <div class="product-container">

            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <h2 class="price"><?php echo CFS()->get('price'); ?></h2>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>

                <?php wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html('Pages:'),
                    'after'  => '</div>',
                )); ?>
            </div>

            <footer class="entry-footer">
                <div class="social-media-btn">
                    <a href=#><span><i class="fa fa-facebook" aria-hidden="true"></i></span>like</a>
                    <a href=#><span><i class="fa fa-twitter" aria-hidden="true"></i></span>tweet</a>
                    <a href=#><span><i class="fa fa-pinterest" aria-hidden="true"></i></span>pin</a>
                </div>
            </footer>
        </div>
        
    </section>
</article>