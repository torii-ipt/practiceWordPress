<?php get_header(); ?>
<main>
    <h2>新着情報一覧</h2>
            <div class="news-wrap">
                <div id="news" class="container">
                    <h2>NEWS</h2>
                    <ul class="news-list">
                        <?php
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10
                        );
                        $query = new WP_Query( $args );
                        ?>
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <li class="news-list-items">
                            <a class="flex" href="<?php the_permalink(); ?>">
                                <div class="time"><?php the_date(); ?></div>
                                <div class="news-category"><?php the_category(); ?></div>
                                <div class="news-title"><?php the_title(); ?></div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
</main>
<?php get_footer(); ?>