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
            <div class="home-hero">
                <?php echo '<img  src="' . wp_get_attachment_url(24) . '" alt="welcome to inhabitent" />'; ?>
                <div class="tent-logo">
                    <?php echo '<img src="' . wp_get_attachment_url(130) . '" alt="inhabitent logo" />'; ?>
                </div>
            </div>
        </section>

        <section class="home-container">

            <h1>shop stuff</h1>

            <article class="home-shop-grid">
            <?php $terms = get_terms(array(
					'taxonomy' => 'product_type',
					'hide_empty' => false,
				)); ?>

                <?php if (!empty($terms) && !is_wp_error($terms)) {?>
                    
                    <?php 
                        $icons = array('do', 'eat', 'sleep', 'wear'); 
                        $i = 0;
                    ?>
				
                    <?php foreach ($terms as $term) { ?>
                        
                        <div class="home-shop-item">
                            <div class="shop-icon">
                                <img src="<?php bloginfo( 'template_directory' ); ?>/images/product-type-icons/<?php echo $icons[$i] ?>.svg" alt="">
                            </div>
                            <div class="category-description">
                                <p><?php echo $term->description ?> </p>
                            </div>
                            <div class="category-btn">
                                <p><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name ?> stuff</a></p>
                            </div>
                        </div>

                        <?php $i++;?>

                    <?php } ?>
					
				<?php } ?>

            </article>

            <h1>inhabitent journal</h1>

            <article class="home-post-grid">

                <?php $args = array(
                    'order' => 'DESC',
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
                                
                                <p><a class="read-more" href="<?php the_permalink(); ?>">read entry</a></p>
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