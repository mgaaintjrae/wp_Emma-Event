<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 * @version 1.0
 */
get_header('search'); ?>

<main class="container" role="main">

    <?php if (have_posts()) : ?>
        <h2 class="page-title">
            <?php
            /* translators: Search query. */
            printf(__('Search Results for: %s', 'emmaevent'), '<span>' . get_search_query() . '</span>');
            ?>
        </h2>
    <?php else : ?>
        <h2 class="page-title"><?php _e('Nothing Found', 'emmaevent'); ?></h2>
    <?php endif; ?>


    <div class="page-sidebar">
        <div class="news-list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post'); ?>
                <?php endwhile; ?>

                <?= emmaevent_paginate() ?>

            <?php else : ?>
                <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'emmaevent'); ?></p>
            <?php
                get_search_form();
            endif; ?>
        </div>
    </div>

    <!-- <aside class="sidebar">
        <?php //get_sidebar(); ?>
    </aside> -->
</main><!-- #main -->

<?php get_footer(); ?>