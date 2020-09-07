<?php get_header('blogNews'); ?>

<main class="sections" role="main">

    <!-- Category Blog -->
    <section>
        <div class="container company">
            <div class="company__title">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs" height="575" width="575">

                <h2 class="page-title">
                    <?php the_category(); ?>

                    <svg class="icon">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </h2>
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