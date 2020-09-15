<?php get_header('blogNews'); ?>

<main class="sections">

    <!-- Category Blog -->
    <section>
        <div class="container company">
            <div class="company__title">
            <?php get_template_part('template-parts/couronne-flower'); ?>
                <div class="page-title">
                    <?php the_category(); ?>

                    <?php get_template_part('template-parts/divider-trefle'); ?>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="events__content">
            <p><?= category_description(); ?></p>
        </div>
    </section>

    <div class="page-sidebar">

        <div class="news-list">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post'); ?>
                <?php endwhile; ?>

                <?= emmaevent_paginate() ?>

            <?php else : ?>
                <h2><?= __('No posts found', 'emmaevent') ?></h2>
            <?php endif; ?>
        </div>



        <aside class="sidebar">
            <?php dynamic_sidebar('blog'); ?>
        </aside>
    </div>

</main>
<?php get_footer(); ?>