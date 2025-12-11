        <div class="news-wrap">
            <div id="news" class="container">
                <h2>NEWS</h2>
                    <ul class="news-list">
                        <?php
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4
                        );
                        $query = new WP_Query( $args );
                        ?>
                        <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
                        <li class="news-list-items">
                            <a class="flex" href="<?php the_permalink(); ?>">
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
