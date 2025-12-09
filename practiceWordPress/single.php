<?php get_header(); ?>
<main>

        <div class="post">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="time"><?php echo get_the_date(); ?></div>
                            <div class="news-category">
                            <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                }
                            ?>
                            </div>
                            <div class="news-title"><?php echo get_the_title(); ?></div> 
                            <div class="news-content"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="news-btn">
            <a class="button02" href="<?= get_site_url(); ?>/news">一覧はこちら</a>
        </div>

</main>
<?php get_footer(); ?>