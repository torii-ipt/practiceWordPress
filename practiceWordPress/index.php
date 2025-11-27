<?php get_header();  ?>
<?php
    args = array(
        'posts_per_page' => -1,
    );
    posts = get_posts(args);
?>
<div class="news-wrap">
            <div id="news" class="container">
                <h2>NEWS</h2>
                <ul class="news-list">
                    <li class="news-list-items">
                        <a class="flex" href="<?php the_permalink(); ?>">
                            <div class="time">2025.05.05</div>
                            <div class="news-category">category</div>
                            <div class="news-title"><?php the_title(); ?></div>
                        </a>
                    </li>
                    <li class="news-list-items">
                        <a class="flex" href="<?php the_permalink(); ?>">
                            <div class="time">2024.05.03</div>
                            <div class="news-category">category</div>
                            <div class="news-title">他のすべての HTML 要素と同様に、この要素はグローバル属性に対応しています。</div>
                        </a>
                    </li>
                    </ul>
</div>