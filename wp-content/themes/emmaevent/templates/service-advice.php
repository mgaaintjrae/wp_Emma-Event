<?php

/**
 * Template Name: Conseil 
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('service-advice'); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="sections" role="main">
            <!-- Service Card -->
            <section>
                <div class="container">
                    <div class="company">
                        <div class="company__title">
                            <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs" height="575" width="575">
                            <div class="page-title">
                                Conseils
                                <svg class="icon">
                                    <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                                    </use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page-service container">
                <div class="page-sidebar prestation">
                    <h1><?php the_title(); ?></h1>
                    <div class="news-list excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="thumbnail">
                        <?php the_post_thumbnail('event-thumbnail-large'); ?>
                    </div>
                    <div class="news-list">
                        <?php the_content(); ?>
                    </div>
                    <div class="header__cta">
                        <a href="<?php the_permalink(17) ?>" class="cta__btn-gold btn">CONTACTEZ-MOI</a>
                    </div>
                </div>
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