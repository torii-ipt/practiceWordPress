<?php
/**
 * The template for displaying all single posts
 */
?>
<?php get_header(); ?>
<main>

        <div class="post">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <p><?php the_date(); ?></p>
                <p><?php the_category(" / "); ?></p>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="news-btn">
            <a class="button02" href="<?= get_site_url(); ?>/news">一覧はこちら</a>
        </div>

</main>
<?php get_footer(); ?>