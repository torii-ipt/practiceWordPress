<?php
/**
 * The template for displaying all single posts
 */
?>
<main>
	
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="post">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="date"><?php the_time('Y年n月j日'); ?></div>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
	
</main>