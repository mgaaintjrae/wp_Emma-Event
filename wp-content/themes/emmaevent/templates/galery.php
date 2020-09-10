<?php

/**
 * Template Name: Galery
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('galery'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main class="sections" role="main">
            <!-- About -->
            <section>
                <div class="container company">
                    <div class="company__title">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/emma-event-organisation-evenement-mariage-couronne-fleurs-champetre.png" loading="lazy" alt="emma-event-organisation-evenement-mariage-couronne-fleurs-champetre" height="575" width="575">
                        <div class="page-title">
                            <?php the_title(); ?>
                            <svg class="icon">
                                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                                </use>
                            </svg>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="page-sidebar__galery">
                    <div class="news-list__galery">
                        <div class="thumbnail">
                            <?php the_post_thumbnail('event-thumbnail-large'); ?>
                        </div>
                        <?php the_content(); ?>
                        <div class="edit__post">
                            <?php if (current_user_can('manage_options')) { ?>
                                <a href="<?php echo get_edit_post_link(); ?>"><?php _e('Edit post', 'emmaevent'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>