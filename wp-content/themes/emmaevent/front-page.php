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
    <section class="container__presta">
        <?php while (have_posts()) : the_post() ?>
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

        <div class="prestation">
            <div class="presta__title">
                <h2>Nos Formules</h2>
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
                            <a href="#" title="En savoir plus">Voir plus</a>
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <figure class="effect-bubba"><img src="https://picsum.photos/300/400?image=1024" alt="" />

                        <figcaption>
                            <h3>
                                <span>Partielle</span>
                            </h3>
                            <p>
                                Cette formule sera pour vous si vous avez déjà des prestataires sélectionnés et que vous
                                souhaitez être accompagnés sur les derniers détails de votre évènement.
                            </p>
                            <a href="#" title="En savoir plus">Voir plus</a>
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
                                profiter de l'instant présent et se laisser aller. Nous coordonnons tout pour que
                                l'imprévu n'est pas sa place dans votre évènement.
                            </p>
                            <a href="#" title="En savoir plus">Voir plus</a>
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
                            <a href="#" title="En savoir plus">Voir plus</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
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