<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (is_home() && !is_front_page()) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <section class="home-hero-image">
            <!-- hero image here -->
            <div class="tent-logo">
                <!-- logo -->
            </div>
        </section>

        <section class="home-container">

            <h1>shop stuff</h1>

            <article class="home-shop-grid">

                <div class="home-shop-item">
                    <div class="shop-icon">
                        <img src="images/product-type-icons/do.svg">
                    </div>
                    <div class="category-description">
                        <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
                    </div>
                    <div class="category-btn">
                        <p><a href="<?php the_permalink(); ?>">do stuff</a></p>
                    </div>
                </div>

                <div class="home-shop-item">
                    <div class="shop-icon">
                        <img src="images/product-type-icons/eat.svg">
                    </div>
                    <div class="category-description">
                        <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
                    </div>
                    <div class="category-btn">
                        <p><a href="<?php the_permalink(); ?>">eat stuff</a></p>
                    </div>
                </div>

                <div class="home-shop-item">
                    <div class="shop-icon">
                        <img src="images/product-type-icons/sleep.svg">
                    </div>
                    <div class="category-description">
                        <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
                    </div>
                    <div class="category-btn">
                        <p><a href="<?php the_permalink(); ?>">sleep stuff</a></p>
                    </div>
                </div>

                <div class="home-shop-item">
                    <div class="shop-icon">
                        <img src="images/product-type-icons/wear.svg">
                    </div>
                    <div class="category-description">
                        <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
                    </div>
                    <div class="category-btn">
                        <p><a href="<?php the_permalink(); ?>">wear stuff</a></p>
                    </div>
                </div>

            </article>

        </section>


        <section class="home-container">

            <h1>inhabitent journal</h1>

            <article class="home-post-grid">

                <?php $args = array(
                    'order' => 'ASC',
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                ); ?>
                <?php $journal_posts = new WP_Query($args); ?>

                <?php if ($journal_posts->have_posts()) : ?>

                    <?php while ($journal_posts->have_posts()) : $journal_posts->the_post(); ?>

                        <div class="home-post-item">

                            <div class="post-image">
                                <?php the_post_thumbnail(); ?>
                            </div>

                            <div class="post-info-container">

                                <div class="entry-meta">
                                    <p><?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?></p>
                                </div>

                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                <p><a class="read-more" href="<?php the_permalink(); ?>">read entry →</a></p>
                            </div>

                        </div>

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>

                    <h2>Cannot Find Recent Posts</h2>

                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            </article>

        </section>


    </main>
</div>

<?php get_footer(); ?>