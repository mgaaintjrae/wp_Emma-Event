<?php

/**
 * Template Name: Le Partiel 
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('service-partiel'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="sections">

            <!-- Service Partiel -->
            <section>
                <div class="container">
                    <div class="company">
                        <div class="company__title">
                        <?php get_template_part('template-parts/couronne-flower'); ?>
                            <h2 class="page-title">
                                Partielle
                                <?php get_template_part('template-parts/divider-trefle'); ?>
                            </h2>
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