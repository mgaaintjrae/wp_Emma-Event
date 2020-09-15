<?php

/**
 * Template Name: Legal Disclamer
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('legal'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="sections">
            <!-- Mentions légales -->
            <section>
                <div class="container">
                    <div class="company">
                        <div class="company__title">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/emma-event-organisation-evenement-mariage-couronne-fleurs-champetre.png" alt="emma-event-organisation-evenement-mariage-couronne-fleurs-champetre" height="575" width="575">
                            <h1 class="page-title">
                                <?php the_title(); ?>
                                <?php get_template_part('template-parts/divider-trefle'); ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="page-sidebar container">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('event-thumbnail-large'); ?>
                    </div>
                    <div class="news-list">
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