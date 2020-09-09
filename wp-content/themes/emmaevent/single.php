<?php get_header('blogNews'); ?>



<!-- Single post -->
<div class="container page-sidebar">
    <?php while (have_posts()) : the_post(); ?>
        <main class="sections" role="main">
            <header class="news-single__header">
                <h1><?php the_title(); ?></h1>
                <div class="news-single__meta">
                    <?php $categories = get_the_category();
                    if (!empty($categories)) :
                    ?>
                        <a class="news__tag" href="<?= get_category_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
                    <?php endif ?>
                    <div class="news__date"><?= sprintf(__('Published on %s', 'emmaevent'), get_the_date()) ?></div>
                </div>
            </header>
            <div class="formatted">
                <?php if (has_post_thumbnail()) : ?>
                    <p>
                        <?= the_post_thumbnail('large'); ?>
                    </p>
                <?php endif ?>
                <?php the_content(); ?>
                <!-- Section share -->
                <?php get_template_part('template-parts/share'); ?>
            </div>

            <?php
            if (comments_open() || absint(get_comments_number()) > 0) {
                comments_template();
            }
            ?>
        </main>
    <?php endwhile; ?>

    <aside class="sidebar">
        <?php dynamic_sidebar('blog'); ?>
    </aside>

</div>

<?php get_footer(); ?>