<?php get_header(); ?>
<main>

        <div class="news-list-items">
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

<style>
    .news-list-items .flex .news-category{
    width: 5rem;
    text-align: center;
    font-weight: bold;
    margin: 0 20px;
    padding:  0 4px;
    color: #FFF;
    background-color: #ff2a2a;
}

.news-btn .button02{
    display: flex;
    justify-content:center;
    align-items: center;
    color: #fff;
    background-color: #ff2a2a;
    box-shadow: 0px 3px 1px 0px #3b3b3b;
    border-radius: 10px;
    width: min(11vw,180px);
    height: 40px;
    font-size: clamp(16px, 1.42vw, 20px);
    margin: 20px;
    transition: 0.3s;
}
</style>