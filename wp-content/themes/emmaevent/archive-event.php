<?php get_header('events') ?>

<main class="sections">
    <!-- Events -->
    <section>
        <div class="container page-events">
            <div class="company__title">
                <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/courone_fleurs.png"
                    alt="couronne de fleurs">
                <h2 class="page-title">Evénements</h2>
                <img src="http://emma-event.fr/wp-content/themes/emmaevent/assets/img/divider_trefle.svg"
                    alt="divider trefle">
            </div>
            <div class="events__content">
                <p>Retrouver tous mes événements en <strong>Ile de France</strong></p>
            </div>

            <div class="events__grid">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/event'); ?>
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
    </div>
</main>
<?php endif; ?>

<?php get_footer() ?>