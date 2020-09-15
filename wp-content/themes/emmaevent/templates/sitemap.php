<?php
/*
Template Name: Sitemap
*/

get_header('sitemap'); ?>

<main class="sections sitemap__bg">

    <!-- Plan du site -->
    <section>
        <div class="container">
            <div class="company">
                <div class="company__title">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/emma-event-organisation-evenement-mariage-couronne-fleurs-champetre.png" alt="emma-event-organisation-evenement-mariage-couronne-fleurs-champetre" height="575" width="575">
                    <h1 class="page-title">
                        <?php the_title(); ?>
                        <?php get_template_part('template-parts/divider-trefle'); ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container page-sidebar sitemap__content">
        <?php get_template_part('/template-parts/sitemap'); ?>
    </section>


</main>
<?php get_footer(); ?>