<?php get_header(); ?>

<main class="sections">
    <!-- Company presentation -->
    <section>
        <?php while (have_posts()) : the_post() ?>
        <div class="container">
            <div class="company">
                <div class="company__title">
                    <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png"
                        alt="couronne de fleurs" height="575" width="575">
                    <h2 class="page-title">
                        Présentation
                        <svg class="icon">
                            <use
                                xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                            </use>
                        </svg>
                    </h2>
                </div>
                <?php the_post_thumbnail('event-thumbnail-large'); ?>
                <div class="event-body">
                    <?php the_content(); ?>
                </div>

            </div>

        </div>
        <?php endwhile; ?>
    </section>



    <!-- Events -->
    <?php //if (have_rows('recent_events')) : while (have_rows('recent_events')) : the_row() ?>
    <!--<section class="container__event"> -->

    <!-- Fantasy 
    <div class="fantasy">
        <div class="deco__left">
            <img src="<?= get_stylesheet_directory_uri();?>/assets/img/branche_feuilles_left.png" alt="branche feuilles"
                width="545" height="442">
        </div>
        <div class="deco__right">
            <img src="<?= get_stylesheet_directory_uri();?>/assets/img/branche_feuilles_right.png"
                alt="branche feuilles" width="545" height="442">
        </div>
    </div>
     Fantasy end -->

    <!--<div class="event">
        <div class="event__title">
            <h2><?php //the_sub_field('title') ?></h2>
            <?php //the_sub_field('image') ?>
            <svg class="icon">
                <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                </use>
            </svg>
        </div>
        <div class="event__content">
            <div class="fantasy-2"></div>
            <?php //the_sub_field('description') ?>
        </div>

        <div class="events__grid">
            <?php
							// $query = new WP_Query([
							// 	'post_type' => 'event',
							// 	'posts_per_page' => 3
							// ]);

            //   if (have_posts()) : ?>
            <?php //while ($query->have_posts()) : $query->the_post(); ?>
            <?php //get_template_part('template-parts/event'); ?>
            <?php //wp_reset_postdata(); ?>
            <?php //endwhile; endif; ?>
        </div>
        </div>

        <div class="events__link">
            <a href="<?= get_post_type_archive_link( 'event' ); ?>" class="btn">Voir tous les événements</a>
        </div>

        </section>-->
    <!-- Events end -->

    <?php //endwhile; ?>
    <?php //endif; ?>

    <!-- Prestations -->
    <section class="container__event">

        <!-- Fantasy -->
        <div class="fantasy">
            <div class="deco__left">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/img/branche_feuilles_left.png"
                    alt="branche feuilles" width="545" height="442">
            </div>
            <div class="deco__right">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/img/branche_feuilles_right.png"
                    alt="branche feuilles" width="545" height="442">
            </div>
        </div>
        <!-- Fantasy end -->

        <div class="presta__title">
            <h2><?php the_sub_field('title') ?></h2>
            <?php the_sub_field('image') ?>
            <svg class="icon">
                <use xlink:href="<?= get_stylesheet_directory_uri();?>/assets/img/svg/sprite.svg#divider_trefle">
                </use>
            </svg>
        </div>

        <div class="presta__content">
            <?php the_sub_field('description') ?>
        </div>

        <div class="presta__grid">

            <div class="hover09 column">
                <div>
                    <figure><img src="https://picsum.photos/300/200?image=244" /></figure>
                    <span>
                        <p>
                            AVANT :
                            Rendez-vous de présentation et étude des besoins
                            Recherche et sélection des prestataires
                            Accompagnement et conseil dans l’organisation
                            Organisation des visites (lieux, traiteur, DJ…)
                            Scénographie (invitations, thème, papeterie, art floral, mise en lumière…)
                            Mise en place des outils de gestion (retroplanning, fiche prestataires, dossier client…)
                            PENDANT :
                            Brief final
                            Accueil et gestion sur place (invités, prestataires)
                            Mise en place et coordination de l’évènement
                            Gestions des imprévus éventuels
                            APRES :
                            Finalisation des prestations (Photographe, vidéaste)
                            Retour de noce (Brunch, petit déjeuner, food truck, BBQ…)
                            Gestion des remerciements

                            Tarif : à partir de 3000€
                        </p>
                    </span>
                </div>
                <div>
                    <figure><img src="https://picsum.photos/300/200?image=1024" /></figure>
                    <span>
                        <p>AVANT :
                            Rendez-vous de présentation et étude des besoins
                            Recherche et sélection des prestataires manquants
                            Conseil et finalisation de l’organisation de votre évènement
                            Mise en place des outils de gestion (retroplanning, fiche prestataires, dossier client…)
                            PENDANT :
                            Brief final
                            Accueil et gestion sur place (invités, prestataires)
                            Mise en place et coordination de l’évènement
                            Gestions des éventuels imprévus
                            APRES : (en option)
                            Finalisation des prestations (Photographe, vidéaste)
                            Retour de noce (Brunch, petit déjeuner, food truck, BBQ…)
                            Gestion des remerciements

                            Tarif : à partir de 2000€
                        </p>
                    </span>
                </div>
                <div>
                    <figure><img src="https://picsum.photos/300/200?image=611" /></figure>
                    <span>
                        <p>
                            JOUR J :
                            Cette formule s’adresse à ceux qui ont juste une envie… savourer leur grand jour, profiter
                            de
                            l’instant présent et se laisser aller. Nous coordonnons tout pour que l’imprévu n’est pas sa
                            place dans votre évènement
                            AVANT :
                            Rendez-vous avec les mariés
                            Liste, rendez-vous téléphonique et brief avec les prestataires
                            Mise en place d’un rétroplanning
                            PENDANT :
                            Brief final
                            Accueil et gestion sur place (invités, prestataires)
                            Mise en place et coordination de l’évènement
                            Gestions des éventuels imprévus

                            Tarif : 1300€
                        </p>
                    </span>
                </div>
                <div>
                    <figure><img src="https://picsum.photos/300/200?image=612" /></figure>
                    <span>
                        <p>
                            A LA CARTE
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Prestations end -->

    <!-- <section class=" container quote">
            <div class="quote__title">Ce que pensent mess clients</div>
            <div class="quote__body">
                <div class="quote__image">
                    <img src="#" alt="">
                    <div class="quote__author">Stephanie</div>
                </div>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, aspernatur sit provident eius,
                        sint, itaque rem blanditiis perferendis quod doloremque maiores architecto. Amet dolore itaque
                        dolores esse facere sint error.</p>
                </blockquote>
            </div>

            <a class="quote__action btn" href="#">
                Mon événement
                <svg class="icon">
                    <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                </svg>
            </a>
    </section> -->



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

</main>


<?php get_footer(); ?>