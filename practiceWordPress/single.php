<?php get_header(); ?>
<main>

        <section class="post-container container">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="post-time"><?php echo get_the_date(); ?></div>
            <div class="post-category">
            <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                echo esc_html($categories[0]->name);
            }
            ?>
            </div>
            <h2 class="post-title"><?php echo get_the_title(); ?></h2> 
            <div class="post-content"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
        <div class="news-btn post-btn">
            <a class="button02" href="<?= get_site_url(); ?>/news">一覧はこちら</a>
        </div>

</main>
<?php get_footer(); ?>

