<?php
/**
 * The template for displaying all single posts
 */
?>
<?php get_header(); ?>
<main>
	
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="post">
            <?php while (have_posts()) : the_post(); ?>
                <p><?php the_date(); ?></p>
                <p><?php the_category(" / "); ?></p>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
	
</main>
<?php get_footer(); ?>