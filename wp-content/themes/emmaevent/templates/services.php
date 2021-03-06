<?php /**
* Template Name: Services
* Template Post Type: post, page
*
* @package WordPress
* @subpackage Emma Event
* @since Emma Event 1.0
*/

get_header('about'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<main class="sections">
    <!-- About -->
    <section>
        <div class="container company">
            <div class="company__title">
                <img src="<?= get_stylesheet_directory_uri();?>/assets/img/courone_fleurs.png" loading="lazy" alt="couronne de fleurs"
                    height="575" width="575">
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

    <section class="page-about">
        <div class="page-sidebar">
            <div class="thumbnail"></div>
            <div class="news-list">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>