<?php get_header('events-professionnels'); ?>


<main class="sections">
    <!-- Events Prives -->
    <section>
        <div class="container">
            <div class="company__title">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs"
                    height="575" width="575">
                <div class="page-title"><?= get_queried_object()->name ?>
                    <svg class="icon">
                        <use
                            xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container events__content">
            <p><?= get_queried_object()->description ?></p>
        </div>
    </section>

    <section>
        <div class="container page-sidebar">
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
        </div>
    </section>

    <section>
        <!-- <aside class="sidebar">
                <?php //dynamic_sidebar('blog'); ?>
            </aside> -->
    </section>
</main>

<?php get_footer(); ?>