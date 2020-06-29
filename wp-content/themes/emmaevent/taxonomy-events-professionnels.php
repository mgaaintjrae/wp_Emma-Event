<?php get_header('events-professionnels'); ?>


<main class="sections">
    <!-- Events Prives -->
    <section>
        <div class="container">
            <div class="company__title">
                <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/courone_fleurs.png"
                    alt="couronne de fleurs">
                <h2 class="page-title"><?= get_queried_object()->name ?>
                    <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_trefle.svg"
                        alt="divider trefle">
                </h2>
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