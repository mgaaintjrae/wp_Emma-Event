<?php get_header('events') ?>

<main class="sections" role="main">
    <!-- Events -->
    <section>
        <div class="container page-events">
            <div class="company__title">
                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs" height="575" width="575">
                <div class="page-title">Événements
                    <svg class="icon">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </div>
            </div>
            <div class="events__content">
                <h1 class="">Retrouver tous mes événements</h1>
            </div>

            <div class="events__grid">
                <?php

                $query = new WP_Query([
                    'post_type' => 'events',
                    'posts_per_page' => 4,
                ]);

                if (have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="content">
                            <figure class="effect-lily">
                                <?php the_post_thumbnail('event-thumbnail-large') ?>
                                <figcaption>
                                    <h3 class="event__body">
                                        <?php the_terms($post->ID, 'events_category'); ?>
                                    </h3>
                                    <a class="event" href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>"></a>
                                    <?php the_excerpt(); ?>
                                </figcaption>
                            </figure>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <?php if (get_query_var('paged', 1) > 1) : ?>
        <?= emmaevent_paginate() ?>
    <?php elseif ($nextPostLink = get_next_posts_link(__('More events +', 'emmaevent'))) :
        var_dump($nextPostLink); ?>
        <div class="pagination">
            <?= $nextPostLink  ?>
        </div>
    <?php endif; ?>

</main>


<?php get_footer() ?>