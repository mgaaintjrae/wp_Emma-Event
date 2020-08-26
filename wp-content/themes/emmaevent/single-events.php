<?php get_header('single--event'); ?>


<main class="sections" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <section>
            <div class="container">
                <div class="event-header">
                    <h2 class="event__title"><?php the_title(); ?></h2>
                    <h3 class="event__type">
                        <?php the_terms($post->ID, 'events_category', 'Événement : '); ?>
                        <div class="thumbnail event__photos">
                            <?php the_post_thumbnail('event-thumbnail-large'); ?>
                        </div>
                </div>

                <div class="event-body">
                    <div class="formatted">
                        <?php the_content(); ?>
                        <p>Publié le <?php the_time('d F Y'); ?> par <a href="<?php the_permalink(11) ?>" title="à propos de moi">Emma-Event</a>
                        </p>
                        <!-- Section share -->
                        <?php get_template_part('template-parts/share'); ?>
                    </div>

                    <div class="post-navigation">
                        <?php get_template_part('template-parts/navigation'); ?>
                    </div>
                </div>

                <div class="event__back">
                    <div class="event__hover">
                        <?php if (is_single()) : ?>
                            <a href="../" class="btn" title="Retour aux événements">
                                <svg class="icon">
                                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#arrow-left">
                                    </use>
                                </svg>Retour</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <div class="edit__post">
                <?php if (current_user_can('manage_options')) { ?>
                    <a href="<?php echo get_edit_post_link(); ?>"><?php _e('Edit post', 'emmaevent'); ?></a>
                <?php } ?>
            </div>
        </section>
</main>
<?php get_footer(); ?>