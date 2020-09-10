<?php
/*
Template Name: Mariages
*/

get_header('events-mariages'); ?>


<main class="sections">
    <!-- Events Mariages -->
    <section>
        <div class="container">
            <div class="company__title">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/emma-event-organisation-evenement-mariage-couronne-fleurs-champetre.png" loading="lazy" alt="emma-event-organisation-evenement-mariage-couronne-fleurs-champetre" height="575" width="575">
                <div class="page-title"><?= get_queried_object()->name ?>
                    <svg class="icon">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
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
                <?php //dynamic_sidebar('blog'); 
                ?>
            </aside> -->
    </section>

    <div class="edit__post">
        <?php if (current_user_can('manage_options')) { ?>
            <a href="<?php echo get_edit_post_link(); ?>"><?php _e('Edit post', 'emmaevent'); ?></a>
        <?php } ?>
    </div>
</main>

<?php get_footer(); ?>