<?php /**
* Template Name: Galery
* Template Post Type: page
*
* @package WordPress
* @subpackage Emma Event
* @since Emma Event 1.0
*/

get_header('galery'); ?>

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

    <section>
        <div class="page-sidebar__galery">
            <div class="news-list__galery">
                <div class="thumbnail">
                    <?php the_post_thumbnail('event-thumbnail-large'); ?>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>