<?php
/*
Template Name: Sitemap
*/

get_header('sitemap'); ?>

<main class="sections sitemap__bg" role="main">

    <!-- Plan du site -->
    <section>
        <div class="container">
            <div class="company">
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
        </div>
    </section>

    <section class="container page-sidebar sitemap__content">
    <?php get_template_part('/template-parts/sitemap'); ?>
    </section>

</main>
<?php get_footer(); ?>