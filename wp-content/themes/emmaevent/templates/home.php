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
                <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png" alt="couronne de fleurs"
                    height="575" width="575">
                <h2 class="page-title"><?php the_title(); ?>
                    <svg class="icon">
                        <use
                            xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                        </use>
                    </svg>
                </h2>
            </div>
            <?php the_post_thumbnail('event-thumbnail-large'); ?>
            <?php the_content(); ?>
            <div class="event-body">
                <?php endwhile; ?>
            </div>
        </div>
    </section>


    <?php
    $query = new WP_query(array('post_type'=>'page','post_parent'=>get_the_ID(), 'post_per_page'=>1));
	while($query->have_posts()): $query->the_post(); global $post;
	?>

    <section class="container__presta">

        <?php
		get_template_part( 'template-parts/fantasy');
		?>

        <!-- PRESTATIONS -->
        <div class="prestation">
            <div class="presta__title">
                <h2><?php the_title(); ?></h2>
                <?php //the_sub_field('image') ?>
                <svg class="icon">
                    <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                    </use>
                </svg>
            </div>
            <div class="presta__content">
                <?php the_content(); ?>
            </div>

            <div class="presta__grid grid">

                <div>
                    <figure class="effect-bubba"><img src="https://picsum.photos/300/400?image=244" alt="" />
                        <figcaption>
                            <h3>Le <span>A à Z</span></h3>
                            <p>Cette formule s'adresse à ceux qui courent après le temps, qui sont totalement
                                stressé ou
                                tout
                                simplement à ceux qui veulent déléguer. Abordez votre évènement en toute
                                sérénité,
                                nous
                                vous
                                conseillons et accompagnons pour chaque étape.</p>
                            <a href="<?php the_permalink(246) ?>" title="En savoir plus">Voir plus</a>
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="effect-bubba"><img src="https://picsum.photos/300/400?image=1024" alt="" />

                        <figcaption>
                            <h3>
                                Le <span>Partiel</span>
                            </h3>
                            <p>
                                Cette formule sera pour vous si vous avez déjà des prestataires sélectionnés et
                                que
                                vous
                                souhaitez être accompagnés sur les derniers détails de votre évènement.
                            </p>
                            <a href="<?php the_permalink(252) ?>" title="En savoir plus">Voir plus</a>
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="effect-bubba"><img src="https://picsum.photos/300/400?image=611" alt="" />
                        <figcaption>
                            <h3>
                                Le <span>Jour J</span>
                            </h3>
                            <p>
                                Cette formule s'adresse à ceux qui ont juste une envie… savourer leur grand jour
                                profiter de l'instant présent et se laisser aller. Nous coordonnons tout pour
                                que
                                l'imprévu n'est pas sa place dans votre évènement.
                            </p>
                            <a href="<?php the_permalink(254) ?>" title="En savoir plus">Voir plus</a>
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="effect-bubba"><img src="https://picsum.photos/300/400?image=612" alt="" />
                        <figcaption>
                            <h3>
                                À <span>La Carte</span>
                            </h3>
                            <p>
                                Cette formule s'adresse à ceux qui ....
                            </p>
                            <a href="<?php the_permalink(256) ?>" title="En savoir plus">Voir plus</a>
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
            <?php masterslider(1); ?>
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

    <?php endwhile; ?>

    <?php get_footer(); ?>