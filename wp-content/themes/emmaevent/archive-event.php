<?php get_header('events') ?>

<main class="sections">
    <!-- Events -->
    <section>
        <div class="container page-events">
            <div class="company__title">
                <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/courone_fleurs.png"
                    alt="couronne de fleurs">
                <h2 class="page-title">Evénements
                    <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_trefle.svg"
                        alt="divider trefle">
                </h2>
            </div>
            <div class="events__content">
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
                <?php get_template_part('template-parts/event'); ?>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if (get_query_var('paged', 1) > 1) : ?>
    <?= emmaevent_paginate() ?>
    <?php elseif ($nextPostLink = get_next_posts_link(__('Plus d\'événements +', 'emmaevent'))) : ?>
    <div class="pagination">
        <?= $nextPostLink  ?>
    </div>
    <?php endif; ?>

</main>


<?php get_footer() ?>