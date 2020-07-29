<?php
/**
 * Template Name: La Carte 
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header('service-card'); ?>

<main class="sections" role="main">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <main class="sections" role="main">

        <!-- Service Card -->
        <section>
            <div class="container">
                <div class="company">
                    <div class="company__title">
                        <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png"
                            alt="couronne de fleurs" height="575" width="575">
                        <h2 class="page-title">
                            <?php the_title(); ?>
                            <svg class="icon">
                                <use
                                    xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                                </use>
                            </svg>
                        </h2>
                    </div>
                </div>
        </section>

        <section class="page-service container">
            <div class="page-sidebar prestation">
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

    </main>
    <?php endwhile; endif; ?>
    <?php get_footer(); ?>