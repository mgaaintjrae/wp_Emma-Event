<?php

/**
 * Template Name: Le Jour J 
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('service-day-j'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="sections" role="main">

            <!-- Service Jour J -->
            <section>
                <div class="container">
                    <div class="company">
                        <div class="company__title">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/emma-event-organisation-evenement-mariage-couronne-fleurs-champetre.png" loading="lazy" alt="emma-event-organisation-evenement-mariage-couronne-fleurs-champetre" height="575" width="575">
                            <div class="page-title">
                                Jour J
                                <svg class="icon">
                                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                                    </use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('/template-parts/service'); ?>             

            <div class="edit__post">
                <?php if (current_user_can('manage_options')) { ?>
                    <a href="<?php echo get_edit_post_link(); ?>"><?php _e('Edit post', 'emmaevent'); ?></a>
                <?php } ?>
            </div>
        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>