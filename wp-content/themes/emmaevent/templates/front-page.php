<?php

/**
 * Template Name: Accueil
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Emma Event
 * @since Emma Event 1.0
 */

get_header(); ?>

<main class="sections" role="main">

    <section class="container">
        <div class="company">
            <?php
            while (have_posts()) : the_post() ?>
                <div class="company__title">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/emma-event-organisation-evenement-mariage-couronne-fleurs-champetre.png" loading="lazy" alt="couronne de fleurs" height="575" width="575">
                    <div class="page-title"><?php the_title(); ?>
                        <svg class="icon">
                            <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                            </use>
                        </svg>
                    </div>
                </div>
                <?php the_post_thumbnail('event-thumbnail-large'); ?>

                <div class="event-body">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>


    <?php
    $query = new WP_query(array('post_type' => 'page', 'post_parent' => get_the_ID(), 'post_per_page' => 1));
    while ($query->have_posts()) : $query->the_post();
        global $post;
    ?>

        <section class="container__presta">

            <?php
            get_template_part('template-parts/fantasy');
            ?>

            <!-- PRESTATIONS -->
            <div class="prestation">
                <div class="presta__title">
                    <h2><?php the_title(); ?></h2>                   
                    <svg class="icon">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </div>
                <div class="presta__content">
                <?php //the_sub_field('image')?>
                    <?php the_content(); ?>
                </div>

                <?php get_template_part('/template-parts/prestations'); ?>
                
                <div class="header__cta">
                    <a href="<?php the_permalink(17) ?>" class="cta__btn-gold btn">DEMANDEZ UNE PRESTATION</a>
                </div>
            </div>

        </section>
        <!-- PRESTATIONS END -->

        <!-- Slider -->
        <section>
            <div class="slider__container">                
                <?php echo do_shortcode('[metaslider id="29"]'); ?>
                <div class="slider__content">
                    <div class="slider__title">
                        <h2>Emma Event</h2>
                    </div>
                    <div class="slider__cta" style="text-align: center;">
                        <a class="cta__btn-white btn" href="<?php the_permalink(17); ?>">CONTACTEZ-MOI</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider end -->

</main>
<?php endwhile; ?>

<?php get_footer(); ?>