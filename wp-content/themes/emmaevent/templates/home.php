<?php

/**
 * Template Name: Home 
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
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs" height="575" width="575">
                    <h2 class="page-title"><?php the_title(); ?>
                        <svg class="icon">
                            <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                            </use>
                        </svg>
                    </h2>
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
                    <?php //the_sub_field('image') 
                    ?>
                    <svg class="icon">
                        <use xlink:href="<?= get_stylesheet_directory_uri(); ?>/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </div>
                <div class="presta__content">
                    <?php the_content(); ?>
                </div>

                <div class="presta__grid grid">
                    <div>
                        <?php
                        $id1 = 246;
                        $billet1 = get_post($id1);
                        $title1 = $billet1->post_title;
                        $lien1 = get_permalink($id1);
                        $excerpt1 = $billet1->post_excerpt;
                        $urlImage1 = get_post_thumbnail_id(246);
                        $urlImage1 = wp_get_attachment_image_src($urlImage1, 'service-thumbnail');
                        $urlImage1 = $urlImage1[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage1 ?>" alt="" />
                            <figcaption>
                                <h3>
                                    <?= $title1 ?>
                                </h3>
                                <p>
                                    <?= $excerpt1 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien1 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div>
                        <?php
                        $id2 = 252;
                        $billet2 = get_post($id2);
                        $title2 = $billet2->post_title;
                        $lien2 = get_permalink($id2);
                        $excerpt2 = $billet2->post_excerpt;
                        $urlImage2 = get_post_thumbnail_id(252);
                        $urlImage2 = wp_get_attachment_image_src($urlImage2, 'service-thumbnail');
                        $urlImage2 = $urlImage2[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage2 ?>" alt="" />
                            <figcaption>
                                <h3>
                                    <?= $title2 ?>
                                </h3>
                                <p>
                                    <?= $excerpt2 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien2 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div>
                        <?php
                        $id3 = 254;
                        $billet3 = get_post($id3);
                        $title3 = $billet3->post_title;
                        $lien3 = get_permalink($id3);
                        $excerpt3 = $billet3->post_excerpt;
                        $urlImage3 = get_post_thumbnail_id(254);
                        $urlImage3 = wp_get_attachment_image_src($urlImage3, 'service-thumbnail');
                        $urlImage3 = $urlImage3[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage3 ?>" alt="" />
                            <figcaption>
                                <h3>
                                    <?= $title3 ?>
                                </h3>
                                <p>
                                    <?= $excerpt3 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien3 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div>
                        <?php
                        $id4 = 256;
                        $billet4 = get_post($id4);
                        $title4 = $billet4->post_title;
                        $lien4 = get_permalink($id4);
                        $excerpt4 = $billet4->post_excerpt;
                        $urlImage4 = get_post_thumbnail_id(256);
                        $urlImage4 = wp_get_attachment_image_src($urlImage4, 'service-thumbnail');
                        $urlImage4 = $urlImage4[0];
                        ?>
                        <figure class="effect-bubba"><img src="<?= $urlImage4 ?>" alt="" />
                            <figcaption>
                                <h3>
                                    <?= $title4 ?>
                                </h3>
                                <p>
                                    <?= $excerpt4 ?>
                                    </br></br>
                                    <a class="hover" href="<?= $lien4 ?>" title="En savoir plus">En savoir +</a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="header__cta">
                    <a href="<?php the_permalink(17) ?>" class="cta__btn-gold btn">DEMANDEZ UNE PRESTATION</a>
                </div>
            </div>

        </section>
        <!-- PRESTATIONS END -->

        <!-- Slider -->
        <section>
            <div class="slider__container">
                <?php// masterslider(1); ?>
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