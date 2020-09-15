<?php

/**
 * Template Name: Services
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('services'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main class="sections">
            <!-- About -->
            <section>
                <div class="container company">
                    <div class="company__title">
                    <?php get_template_part('template-parts/couronne-flower'); ?>
                        <h1 class="page-title">
                            <?php the_title(); ?>
                            <?php get_template_part('template-parts/divider-trefle'); ?>
                        </h1>
                    </div>
                </div>
            </section>

            <section class="page-service container">
                <div class="page-sidebar prestation">
                    <div class="thumbnail">
                        <?php the_post_thumbnail('event-thumbnail-large'); ?>
                    </div>
                    <div class="news-list">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php get_template_part('/template-parts/prestations'); ?>

            </section>

            <div class="edit__post">
                <?php if (current_user_can('manage_options')) { ?>
                    <a href="<?php echo get_edit_post_link(); ?>"><?php _e('Edit post', 'emmaevent'); ?></a>
                <?php } ?>
            </div>

        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>