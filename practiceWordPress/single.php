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
        <div class="news-btn">
            <a class="button02" href="<?= get_site_url(); ?>/news">一覧はこちら</a>
        </div>

</main>
<?php get_footer(); ?>

<style>
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

    @media screen and (max-width:768px) {
        .post-category{
            width: 20.2vw;
        }
    }    
</style>