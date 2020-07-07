<?php get_header('events') ?>

<main class="sections">
    <!-- Events -->
    <section>
        <div class="container page-events">
            <div class="company__title">
                <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/courone_fleurs.png"
                    alt="couronne de fleurs" height="575" width="575">
                <h2 class="page-title">Evénements
                    <svg class="icon">
                        <use
                            xlink:href="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </h2>
            </div>
            <div class=" events__content">
                <p>Retrouver tous mes événements en <strong>Ile de France</strong></p>
            </div>

            <div class="events__grid">
                <?php
							$query = new WP_Query([
								'post_type' => 'event',
								'posts_per_page' => 4
							]);
                if (have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="content">
                    <a class="event " href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">

                        <div class="event__image content-image">
                            <div class="content-overlay"></div>
                            <?php the_post_thumbnail('event-thumbnail-large') ?>
                        </div>
                        <div class="content-details fadeIn-bottom">
                            <div class="event__body content-title">
                                <?php $type = the_field('type');
                    if( $type ):?>
                                <?php foreach( $types as $type): ?>
                                <h3 class="event__type">
                                    <?php $type ?>
                                </h3>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <p class="content-text"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </div>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if (get_query_var('paged', 1) > 1) : ?>
    <?= emmaevent_paginate() ?>
    <?php elseif ($nextPostLink = get_next_posts_link(__('More events +', 'emmaevent'))) : ?>
    <div class="pagination">
        <?= $nextPostLink  ?>
    </div>
    <?php endif; ?>

</main>


<?php get_footer() ?>