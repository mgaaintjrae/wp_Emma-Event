<?php

/**
 * Template Name: About
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('about'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main class="sections" role="main">
            <!-- About -->
            <section>
                <div class="container company">
                    <div class="company__title">
                        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs" height="575" width="575">
                        <h2 class="page-title">
                            <?php the_title(); ?>
                            <svg class="icon">
                                <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                                </use>
                            </svg>
                        </h2>
                    </div>
                </div>
            </section>

            <section class="page-about">
                <div class="page-sidebar">
                    <div class="thumbnail"></div>
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

            <!-- Fantasy -->
            <div class="fantasy__about">
                <div class="deco__left">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/branche_feuilles_left.png" loading="lazy" alt="branche feuilles" width="545" height="442">
                </div>
            </div>
            <!-- Fantasy end -->

        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>