<?php get_header(); ?>
<main>

            <div class="news-wrap">
                <div id="news" class="container">
                    <h2>新着情報一覧</h2>
                    <ul class="news-list">
                        <?php
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10
                        );
                        $query = new WP_Query( $args );
                        ?>
                        <?php if ($query->have_posts()): while (have_posts()): the_post(); ?>
                        <li class="news-list-items">
                            <a class="flex" href="<?php the_permalink(); ?>">
                                <div class="time"><?php echo get_the_date(); ?></div>
                                <div class="news-category"><?php echo get_the_category(); ?></div>
                                <div class="news-title"><?php echo get_the_title(); ?></div>
                            </a>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                        <?php endif; ?>

                    </ul>
                    <div class="news-btn">
                        <a class="button02" href="<?= get_site_url(); ?>/news">一覧はこちら</a>
                    </div>
                </div>
            </div>
</main>
<?php get_footer(); ?>