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
                <?php get_template_part('template-parts/couronne-flower'); ?>
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